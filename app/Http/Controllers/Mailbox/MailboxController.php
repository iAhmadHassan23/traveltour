<?php

namespace App\Http\Controllers\Mailbox;

use App\Http\Controllers\Controller;
use App\Http\Resources\Emails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Webklex\PHPIMAP\ClientManager;
use Webklex\PHPIMAP\Client;
use Webklex\PHPIMAP\Support\Masks\AttachmentMask;
use App\Models\EmailAccount;
use App\Models\Signature;
use Auth;
use App\Models\User;
use Session;
use Illuminate\Support\Collection;
use Mail;
use Illuminate\Support\Str;
use URL;
use Illuminate\Support\Facades\Config;
class MailboxController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['role_permission:mail_box']);

    }
    public function index(Request $request, $folder = 'INBOX')
    {
        $email_accounts = EmailAccount::active()->get(['email_account']);
        $email_account  = $this->email_validate($email_accounts, $request->mailbox_email);
        if (!isset($email_account->email_account) && !is_null($email_account->getData())) {
            return $email_account;
        }

        $account = self::account($email_account);

        $messages = $this->getAllMessages($request, $account, $folder);

//        dd($messages, $email_accounts);
        if ($request->ajax()) {
            $messages_render = view('backend.mailbox.inbox', compact('messages', 'folder'))->render();
            return response()->json(['messages' => $messages_render]);
        }

        $folders = self::sidebar_menu($account);

//        $client
//        $folders = $client->getFoldersWithStatus();
//        dd();
        return view('backend.mailbox.index', compact('folders', 'messages', 'folder', 'email_accounts'));
    }

    private function getAllMessages($request, $Account, $FolderName ='INBOX'){

        $request['perPage'] = is_null($request->perPage) ? 15 : $request->perPage;
        $request['page'] = is_null($request->page) ? 1 : $request->page;
        $request['orderBy'] = is_null($request->orderBy) ? 'desc' : $request->orderBy ;

        if ($Account['host'] === "imap.gmail.com") {
            $FolderName = str_replace('.', '/', $FolderName);
        }
        $FolderName = (mb_detect_encoding($FolderName) == "UTF-8") ? mb_convert_encoding($FolderName, "UTF7-IMAP", "UTF-8") : $FolderName;
        $MailBOX    = "{" . $Account['host'] . ":" . $Account['port'] . "/" . $Account['protocol'] . "/" . $Account['encryption'] . "}" .  $FolderName;
        try {
            $Connection = imap_open($MailBOX, $Account['username'], $Account['password']);
//        or die("can't connect: " . imap_last_error());
            if (!$Connection) {
                redirect()->to(route('email-accounts.index'))->with(['error' => $Account['username'] .' Connection Error please contact an admin.'])->throwResponse();
            }
        }catch (\Exception $e) {
            redirect()->to(route('email-accounts.index'))->with(['error' => $Account['username'].' Connection Error please contact an admin.'])->throwResponse();
        }


        $Limit         = $request->perPage * $request->page;
        $From          = ($Limit - $request->perPage) + 1;
        $From          = ($From < 1) ? 1 : $From;
        $Limit         = (($Limit - $From) != ($request->perPage - 1)) ? ($From + ($request->perPage - 1)) : $Limit;

        $Info          = imap_check($Connection);
        $TotalMessages = $Info->Nmsgs;

        $Limit = ($TotalMessages < $Limit) ? $TotalMessages : $Limit;

        $Start = ($TotalMessages - ($request->perPage * $request->page)) + 1;
        $End   = ($Start + $request->perPage) - 1;

        if ($Start < 0) {
            $Start = $Start - $Start;
        }

        if ($Start == 0) {
            $Start = 1;
        }
        $Messages = range($From, $TotalMessages);

        if ($request->orderBy == 'asc') {
            $Messages = range($From, $Limit);
        } else if ($request->orderBy == 'desc') {
            $Messages = range($Start, $End);
        } else {
            $Messages = range($Start, $End);
        }
        $Result = imap_fetch_overview($Connection, implode(',', $Messages), 0);

        usort($Result, function ($a, $b) {
            return ($b->udate - $a->udate);
        });
        $Count = imap_num_msg($Connection);
        if ($Result) {
            imap_close($Connection);
            $total_pages = ceil($Count / $request->perPage);
            $pagination_query = $request->query();
            $pagination_query['folder_name'] = $FolderName;

           return [
                'Data'  => Emails::collection($Result),
                'From'  => $From,
                'To'    => $Limit,
                'Count' => $Count,
                'current_page' => route('admin.mailbox.index', array_merge($pagination_query, ['page' => $request->page])),
                'next_page' => route('admin.mailbox.index', array_merge($pagination_query, ['page' => (($request->page + 1) <= $total_pages ? $request->page + 1 : $total_pages)])) ,
                'previous_page' => route('admin.mailbox.index',  array_merge($pagination_query, ['page' => (($request->page - 1) >= 1 ? $request->page - 1 : 1)])),
                'Pages' => $total_pages
            ];
        } else {
            imap_close($Connection);
            return [
                'Data'  => Emails::collection([]),
                'From'  => $From,
                'To'    => $Limit,
                'Count' => $Count,
                'current_page' => route('admin.mailbox.index', ['folder_name' => $FolderName, 'page' =>  1  ]),
                'next_page' => route('admin.mailbox.index', ['folder_name' => $FolderName, 'page' => 1]) ,
                'previous_page' => route('admin.mailbox.index', ['folder_name' => $FolderName, 'page' => 1]),
                'Pages' => 0
            ];
        }
    }

    public function email_validate($email_accounts, $imap_email)
    {
        if (count($email_accounts) <= 0) {
            redirect()->to(route('email-accounts.index'))->with(['error' => 'Please add or active at least one email account.'])->throwResponse();
        }

        $emails = collect($email_accounts->toArray())->pluck('email_account')->toArray();
        $status = in_array($imap_email, $emails);
        $user = Auth::user();

        if ($status) {
            $user->update([
                'default_email' => $imap_email
            ]);
        }
        $email_account = EmailAccount::active()->where('email_account', $user->default_email)->first();
        if (is_null($email_account)) {
            Session::flash('error', 'You have not been assigned an email. Please contact an admin.');
            return view('backend.mailbox.error')->with([
                'email_accounts' => $email_accounts,

            ]);
        }

        return $email_account;
    }

    function sidebar_menu($account)
    {
        $MailBOX = "{" . $account['host'] . ":" . $account['port'] . "/" . $account['protocol'] . "/" . $account['encryption'] . "}";
        $Imap = imap_open($MailBOX, $account['username'], $account['password'], OP_HALFOPEN) or die("can't connect: " . imap_last_error());
        $Folders = imap_list($Imap, $MailBOX, "*");

        $folders = [];

        foreach ($Folders as $Folder) {

            $ModifiedFolder = str_replace($MailBOX, "", $Folder);
            $MailStatus     = imap_status($Imap, "{" . $account['host'] . "}" . $ModifiedFolder, SA_UNSEEN);
            if ($MailStatus) {
                array_push($folders, ['Name' => mb_convert_encoding($ModifiedFolder, "UTF-8", "UTF7-IMAP"), 'Count' => $MailStatus->unseen]);
            } else {
                redirect()->back()->with('error', imap_last_error())->throwResponse();
            }
        }

        return $folders;
    }

    private function account($email_account)
    {

        return [
            "host"           => $email_account->host,
            "port"           => $email_account->port,
            "protocol"       => $email_account->protocol,
            "encryption"     => $email_account->encryption,
            "validate_cert"  => $email_account->validateCert == 1 ? true : false,
            "username"       => $email_account->email_account,
            "password"       => $email_account->password,
            "authentication" => null,
            "proxy"          => [
                "socket"          => null,
                "request_fulluri" => false,
                "username"        => null,
                "password"        => null
            ],
            "timeout"        => 30,
            "extensions"     => []
        ];
    }

    public function message_detail(Request $request, $folder, $message_id)
    {

        $folder = str_replace('INBOX.', '', $folder);
        $email_accounts = EmailAccount::active()->get(['email_account']);
        $email_account  = $this->email_validate($email_accounts, $request->mailbox_email);
        if (!isset($email_account->email_account) && !is_null($email_account->getData())) {
            return $email_account;
        }

        try {
            $account = self::account($email_account);
            $cm      = new ClientManager();
            $client  = $cm->make($account);
            $client->connect();
            $folder = $client->getFolder($folder);
            $message = $folder->messages()->getMessage($message_id) or die('dash');
            $message->setFlag(['Seen']);

            $folders        = self::sidebar_menu($account);
            $HasAttachments = $message->hasAttachments();
            $files = [];
            if ($HasAttachments) {
                $Attachments = $message->getAttachments();
                foreach ($Attachments as $Attachment) {
                    $masked       = $Attachment->setMask(AttachmentMask::class);
                    $Temp         = [];
                    $Temp['mask'] = $masked->mask();
                    $extension    = pathinfo($Temp['mask']->getName(), PATHINFO_EXTENSION);
                    $filebasename = pathinfo($Temp['mask']->getName())['filename'];
                    $fileName     = str_replace(' ', '_', $filebasename);
                    $fileName     = preg_replace('/[^A-Za-z0-9\-]/', '_', $fileName) . '.' . $extension;

                    $Destination = public_path('images/mails/' . $message_id . '/');
                    $URL         = url('images/mails/' . $message_id . '/' . $fileName);

                    if (!File::isDirectory($Destination)) {
                        File::makeDirectory($Destination, 0777, true, true);
                    }
                    $image_extensions = ['jpeg', 'jpg', 'png', 'gif', 'tiff', 'webp', 'heif'];
                    if (in_array(strtolower($extension), $image_extensions)) {
                        $filetype = 'image';
                    } else {
                        $filetype = 'text';
                    }
                    $files[] = [
                        'url'      => $URL,
                        'type'     => $filetype,
                        'size'     => round($Temp['mask']->getSize() / 1000000, 2),
                        'filename' => $fileName
                    ];
//                array_push($files, $URL);
                    $Attachment->save($Destination, $fileName);
                }
            }
            return view('backend.mailbox.index', compact('folders', 'message', 'files', 'email_accounts'));
        } catch (Webklex\PHPIMAP\Exceptions\MessageNotFoundException $e) {
            return redirect()->to(route('admin.mailbox.index'));
        }

    }


    public function compose(Request $request, $folder = null, $message_id = null)
    {

        $email_accounts = EmailAccount::active()->get(['email_account']);
        $email_account  = $this->email_validate($email_accounts, $request->mailbox_email);
        if (!isset($email_account->email_account) && !is_null($email_account->getData())) {
            return $email_account;
        }
        $account    = self::account($email_account);
        $message_details = null;
        if($message_id){
            $cm      = new ClientManager();
            $client  = $cm->make($account);
            $client->connect();
            $folder = $client->getFolder($folder);
            $message_details = $folder->messages()->getMessage($message_id) or die('dash');
        }
        $folders        = self::sidebar_menu($account);
        $signatures = Signature::get();
        $compose    = 'compose';
        return view('backend.mailbox.index', compact('email_accounts', 'message_details','signatures', 'compose', 'folders'));
    }

    public function message_send(Request $request)
    {
        $request->validate([
            'to'           => 'required|email',
            'subject'      => 'required|string',
            'message_body' => 'required'
        ]);
        $file = null;
        if ($request->has('attachment')) {
            $image     = $request->file('attachment');
            $imageName = (string)Str::UUID() . '.' . $image->extension();
            $image->move('./images/temp/', $imageName);
            $file = URL::to('/images/temp/' . $imageName);
        }

        $email_accounts = EmailAccount::active()->get(['email_account']);
        $email_account  = $this->email_validate($email_accounts, $request->mailbox_email);
        if (!isset($email_account->email_account) && !is_null($email_account->getData())) {
            return $email_account;
        }
        $account = self::account($email_account);
        $signature = Signature::where('id', $request->signature)->first();
        if ($signature){
            $signature->content = json_decode($signature->content);
        }
        $folder_name = is_null($request->folder_name) ? 'INBOX' : $request->folder_name;

        $backup = Config::get('mail.mailers.smtp');
        Config::set('mail.mailers.smtp.username', $account['username']);
        Config::set('mail.mailers.smtp.password', $account['password']);

         if ($request->message_id) {
             $cm     = new ClientManager();
             $client = $cm->make($account);
             $client->connect();
             $folder   = $client->getFolder($folder_name);
             $messages = $folder->messages();
             $message  = $messages->getMessage($request->message_id);

             if ($message->hasHTMLBody()) {
               $replybody = $message->getHTMLBody(false);
              } else {
                 $replybody = $message->getTextBody();
             }

             $attributes = $message->getAttributes();
             $message = Mail::send('admin.mailbox.email.send_email', ['message_body' => $request->message_body, 'reply_body' => $replybody, 'signature' => $signature], function ($message) use ($attributes, $request, $email_account, $file) {

                 $references = $attributes['message_id'][0] . ' <' . $attributes['message_id'][0] . '>';
                 $message->getHeaders()->addTextHeader('In-Reply-To', $attributes['message_id'][0]);
                 $message->getHeaders()->addTextHeader('References', $attributes['message_id'][0]);
                 $message->getHeaders()->addTextHeader('X-PM-KeepID', true);
//                 dd($message->getHeaders()->get('Message-ID')->setId(''));
                 $message->getHeaders()->addTextHeader('custom-header-Message-ID', $attributes['message_id'][0]);
//                 $message->getHeaders()->addTextHeader('Message-ID', $attributes['message_id'][0]);
                 $message->getHeaders()->addTextHeader('X-Spam-Score', 0);
                 $message->from($email_account->email_account);
//                 $message->sender($attributes['from'][0]->mail);
                 $message->to($request->to);
                 if ($request->reply_to) {
                     $message->replyTo($request->reply_to);
                 } else {
                     $message->replyTo($email_account->email_account);
                 }

                 $message->subject('Re: ' . $request->subject);
                 if (!is_null($file)) {
                     $message->attach($file);
                 }
             });

         } else {
            $message = Mail::send('admin.mailbox.email.send_email', ['message_body' => $request->message_body, 'signature' => $signature], function ($message) use ($request, $file, $email_account) {
                $message->to($request->to)->subject
                ($request->subject);
                $message->from($request->from, 'Tilesetc');
                if (!is_null($file)) {
                    $message->attach($file);
                }
                if ($request->reply_to) {
                    $message->replyTo($request->reply_to);
                } else {
                    $message->replyTo($email_account->email_account);
                }
            });
         }

        Config::set('mail.mailers.smtp', $backup);
         if(!is_null($message)){
             /* First, retrieve a raw copy of the message */
             $msg_raw = $message->toString();

             /* Open an IMAP connection to your server, use config, env... whatever */


             $MailBOX = "{" . $account['host'] . ":" . $account['port'] . "/" . $account['protocol'] . "/" . $account['encryption'] . "}";
             $Imap = imap_open($MailBOX, $account['username'], $account['password'], null, 1, ['DISABLE_AUTHENTICATOR' => 'GSSAPI']) or die("can't connect: " . imap_last_error());

             imap_append(
                 $Imap,
                 $MailBOX . 'INBOX.Sent',
                 $msg_raw . "\r\n",
                 "\\Seen"
             );

             /* Close the stream, cleanup */
             imap_close($Imap);
         }


        return redirect()->to(route('admin.mailbox.index'))->with(['success' => 'Email successfully sent to ' . $request->to]);


    }

    public function delete(Request $request)
    {

        $request->validate([
            'checked_data' => 'required'
        ]);
        $account = self::account();
        $cm      = new ClientManager();
        $client  = $cm->make($account);
        $client->connect();
        $folder  = $client->getFolder('INBOX');
        $message = $folder->messages()->getMessage(7);

        foreach ($request->checked_data as $row) {
            $row     = explode('.', $row);
            $folder  = $client->getFolder($row[0]);
            $message = $folder->messages()->getMessage($row[1]);

        }
    }

    public function move_to_trash(Request $request, $message_id)
    {
        $email_accounts = EmailAccount::active()->get(['email_account']);
        $email_account  = $this->email_validate($email_accounts, $request->email_validate);
        if (!isset($email_account->email_account) && !is_null($email_account->getData())) {
            return $email_account;
        }
        $folder_name = str_replace('INBOX.', '', $request->folder);
        $account     = self::account($email_account);
        $cm          = new ClientManager();
        $client      = $cm->make($account);
        $client->connect();
        $folder  = $client->getFolder($folder_name);
        $message = $folder->messages()->getMessage($message_id);
        $message->move('INBOX.Trash');
        return redirect()->to(route('admin.mailbox.index', $request->folder))->with(['success' => 'message move to trashed successfully.']);
    }

    public function delete_message(Request $request, $message_id)
    {
        $email_accounts = EmailAccount::active()->get(['email_account']);
        $email_account  = $this->email_validate($email_accounts, $request->email_validate);
        if (!isset($email_account->email_account) && !is_null($email_account->getData())) {
            return $email_account;
        }


        $account = self::account($email_account);
        $cm      = new ClientManager();
        $client  = $cm->make($account);
        $client->connect();
        $folder  = $client->getFolder($request->folder);
        $message = $folder->messages()->getMessage($message_id);
        $message->delete(true);
        return redirect()->to(route('admin.mailbox.index', 'INBOX.'.$request->folder))->with(['success' => 'message move to trashed successfully.']);
    }

}
