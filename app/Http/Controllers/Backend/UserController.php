<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Auth;


class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('permission:User list', ['only' => ['index']]);
//        $this->middleware('permission:User Create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:User Update', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:User Delete', ['only' => ['destroy']]);
//    }
    public function index(Request $request)
    {
        $users = User::where(function ($q) use ($request) {
            $q->where('name', 'LIKE', '%' . $request->q . '%');
            $q->orWhere('email', 'LIKE', '%' . $request->q . '%');
        })->latest()->paginate(15);
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('backend.users.update', compact('roles'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        DB::beginTransaction();
        try {
            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole($request->role);
            DB::commit();
            return redirect()->back()->with('success', 'User added successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', 'Something went wrong please try again!');
        }
    }

    public function edit($id)
    {
        $row = User::with('roles')->where('id', $id)->first();
        $roles = Role::get();
        return view('backend.users.update', compact('row', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => 'required|unique:users,email,' . $id,
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        DB::beginTransaction();

        try {
            $data = [
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ];
            if(is_null($request->password)){

                unset($data['password']);
            }
            User::where('id', $id)->update($data);
            User::where('id', $id)->first()->assignRole($request->role);
            DB::commit();
            return redirect()->back()->with('success', 'User updated successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        if ($id != 1) {
            User::where('id', $id)->delete();
            return redirect()->back()->with('success', 'User deleted successfully.');
        }
        return redirect()->back()->with('error-message', 'Something went wrong try again');

    }

    public function changepassword()
    {
        return view('backend.setting.changepassword');
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'current_password'     => ['required'],
            'new_password'         => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }
        User::where('id', auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
//        Auth::logoutOtherDevices($request->current_password);
        return redirect()->back()->with(['message' => 'Password change successfully.']);
    }

}
