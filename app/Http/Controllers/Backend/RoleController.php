<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:Role list', ['only' => ['index']]);
        $this->middleware('permission:Role Create', ['only' => ['create', 'store']]);
        $this->middleware('permission:Role Update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Role Delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::latest()->paginate(10);
        return view('backend.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('backend.roles.update', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|unique:roles,name',
        ]); 
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->to(route('roles.index'))->with(['message' => $request->role . ' role successfully added.']);

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
        $permissions = Permission::get();
        $row     = Role::with('permissions')->findOrfail($id);
        return view('backend.roles.update', compact('permissions', 'row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required|unique:roles,name,' . $id,
        ]);
        $role = Role::where('id', $id)->first();
        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->to(route('roles.index'))->with(['message' => $request->role . ' role successfully updated.']);
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

    public function assignRole(Request $request, $username)
    {
        if (!$request->ajax()){
            return redirect()->back();
        }
        $user = User::where('username', $username)->first();

        $roles = Role::get();
        $HTMLRender = view('components.assign_role', compact('user', 'roles'))->render();
        return response()->json(['section' => $HTMLRender, 'modal_class' => 'modal']);
    }

    public function assignRoleStore(Request $request, $username)
    {
        $this->validate(request(), [
            'role' => 'required|exists:roles,name',
        ]);
        $user = User::where('username', $username)->first();
        $user->syncRoles($request->role);

        return response()->json(['message' => $request->role .' role successfully assign to user', 'alert_class' => 'success']);
    }
}
