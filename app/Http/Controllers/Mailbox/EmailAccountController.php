<?php

namespace App\Http\Controllers\Mailbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailAccount;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;
use DB;

class EmailAccountController extends Controller
{

    public function __construct()
    {
//        $this->middleware(['role_permission:email_accounts'])->only(['index']);
//        $this->middleware(['role_permission:add_email_accounts'])->only(['store']);
//        $this->middleware(['role_permission:edit_email_accounts'])->only(['update']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email_accounts = EmailAccount::latest()->get();
        return view('backend.email_accounts.index', compact('email_accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.email_accounts.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email_account' => 'required|string|email|max:191|unique:email_accounts',
            'password'      => 'required|string',
            'host'          => 'required|string|max:100',
            'port'          => 'required|numeric|between:0,3000|max:3000',
            'encryption'    => ['nullable', 'string', 'max:4', Rule::in(['false', 'ssl', 'tls', 'starttls', 'notls'])],
            'validateCert'  => 'required|boolean',
            'protocol'      => ['nullable', 'string', 'max:5', Rule::in(['imap', 'pop3', 'nntp'])],
            'status'        => 'nullable|boolean',
        ],
            [
                'email_account.unique'   => 'The email account already exists.',
                'email_account.required' => 'The email account / username field is required.',
                'encryption.in'          => 'Supported encryption types are: false, ssl, tls, starttls, notls.',
                'protocol.in'            => 'Supported protocols are: imap, pop3, nntp.',
                'password.regex'         => 'Password must contain at lest 6 characters, including Uppercase, Lowercase or numbers'
            ]
        );
        DB::beginTransaction();
        if (!is_null(env('CPANEL_USERNAME'))) {
            $cpanelDomain   = env('CPANEL_DOMAIN'); //'host39.registrar-servers.com';
            $cpanelUsername = env('CPANEL_USERNAME'); //'tilesetc';
            $cpanelPassword = env('CPANEL_PASSWORD'); //'7lm^~ARB_ztZ';
            $email          = $request->email_account; // Replace with the desired email account username
            $domain         = env('CPANEL_CLIENT_DOMAIN'); // Replace with the cPanel domain

            $response = Http::withBasicAuth($cpanelUsername, $cpanelPassword)
                ->post("https://{$cpanelDomain}:2083/execute/Email/add_pop", [
                    'domain'   => $domain,
                    'email'    => $email,
                    'password' => $request->password,
                    'quota'    => 0, // Set the email account quota (0 for unlimited)
                ]);

            if (!$response->successful()) {
                return redirect()->to(route('email-accounts.index'))->with(['error' => 'Something went wrong.']);
            }
        }


        $EmailAccount = EmailAccount::create([
            'email_account' => $request->email_account,
            'password'      => $request->password,
            'host'          => $request->host,
            'port'          => $request->port,
            'encryption'    => ($request->encryption) ? $request->encryption : 'ssl',
            'validateCert'  => ($request->validateCert) ? $request->validateCert : true,
            'protocol'      => ($request->protocol) ? $request->protocol : 'imap',
            'status'        => ($request->status) ? true : false,
        ]);
        DB::commit();
        return redirect()->to(route('email-accounts.index'))->with(['success' => 'Email account successfully added.']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = EmailAccount::findOrFail($id);
        return view('backend.email_accounts.update', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $email_account = EmailAccount::findOrFail($id);
        $request->validate([
            'password'     => 'nullable|string',
            'host'         => 'required|string|max:100',
            'port'         => 'required|numeric|between:0,3000|max:3000',
            'encryption'   => ['nullable', 'string', 'max:4', Rule::in(['false', 'ssl', 'tls', 'starttls', 'notls'])],
            'validateCert' => 'nullable|boolean',
            'protocol'     => ['nullable', 'string', 'max:5', Rule::in(['imap', 'pop3', 'nntp'])],
            'status'       => 'nullable|boolean',
        ],
            [
                'encryption.in' => 'Supported encryption types are: false, ssl, tls, starttls, notls.',
                'protocol.in'   => 'Supported protocols are: imap, pop3, nntp.'
            ]
        );
        $password       = $request->password;
        if (!is_null(env('CPANEL_USERNAME'))) {
            $cpanelDomain   = env('CPANEL_DOMAIN'); //'host39.registrar-servers.com';
            $cpanelUsername = env('CPANEL_USERNAME'); //'tilesetc';
            $cpanelPassword = env('CPANEL_PASSWORD'); //'7lm^~ARB_ztZ';
            $email          = $request->email_account; // Replace with the desired email account username
            $domain         = env('CPANEL_CLIENT_DOMAIN'); // Replace with the cPanel domain


            $query = "https://$cpanelDomain:2083/execute/Email/passwd_pop?email=$email&password=$password&domain=$domain";;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $header[0] = "Authorization: Basic " . base64_encode($cpanelUsername . ":" . $cpanelPassword) . "\n\r";
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curl, CURLOPT_URL, $query);
            $result = curl_exec($curl);
            if ($result == false) {
                error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");
            }
            curl_close($curl);
            $response = json_decode($result, true);
            if ($response['status'] == 0) {
                return redirect()->back()->with(['error' => $response['errors'][0]]);
            }
        }


//            'email_account' => $request->email_account,
        $email_account->update([
            'password'     => $password,
            'host'         => $request->host,
            'port'         => $request->port,
            'encryption'   => ($request->encryption) ? $request->encryption : 'ssl',
            'validateCert' => ($request->validateCert) ? $request->validateCert : true,
            'protocol'     => ($request->protocol) ? $request->protocol : 'imap',
            'status'       => ($request->status) ? true : false,
        ]);

        return redirect()->to(route('email-accounts.index'))->with(['success' => 'Email Account ' . $email_account->email_account . ' updated successfully!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function test_cpanel_email_create(Request $request)
    {

        $cpanelDomain   = 'host39.registrar-servers.com';
        $cpanelUsername = 'tilesetc';
        $cpanelPassword = '7lm^~ARB_ztZ';
        $email          = 'test@tilesetc.com.au'; // Replace with the desired email account username
        $domain         = 'tilesetc.com.au'; // Replace with the cPanel domain
        $password       = 'en$E26C@rxcvxcsds';


        $query = "https://$cpanelDomain:2083/execute/Email/passwd_pop?email=$email&password=$password&domain=$domain";;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $header[0] = "Authorization: Basic " . base64_encode($cpanelUsername . ":" . $cpanelPassword) . "\n\r";
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $query);
        $result = curl_exec($curl);
        if ($result == false) {
            error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");
        }
        curl_close($curl);
        return $result;


        // Change the email account password using cPanel UAPI
//        $response = Http::withBasicAuth($cpanelUsername, $cpanelPassword)
//            ->post("https://{$cpanelDomain}:2083/execute/Email/change_password", [
//                'domain' => $domain,
//                'email' => $email,
//                'password' => '463dt#ere$ed2',
//            ]);
//        dd($response);
//        if ($response->successful()) {
//            return "Email account password changed successfully!";
//        } else {
//            return "Error changing email account password: " . $response->body();
//        }

    }

}
