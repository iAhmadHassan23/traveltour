<?php

namespace App\Http\Controllers\Mailbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signature;

class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signatures = Signature::latest()->get();
        return view('backend.signatures.index', compact('signatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.signatures.update');
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
            'name'    => 'required',
            'content' => 'required',
            'image'   => 'required'
        ]);
        $imageName = null;
        if ($request->has('image')) {
            $image     = $request->file('image');
            $imageName = date('dmYiHs') . '.' . $image->extension();
            $image->move('./upload/signature/', $imageName);
        }
        $signature = Signature::create([
            'name'    => $request->name,
            'content' => json_encode($request->content),
            'image'   => $imageName
        ]);

        return redirect()->to(route('signatures.index'))->with(['success' => 'Signature successfully added.']);
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
        $row = Signature::where('id', $id)->firstOrFail();
        $row->content = json_decode($row->content);
        return view('backend.signatures.update', compact('row'));
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
        $row = Signature::where('id', $id)->first();
        $request->validate([
            'name'    => 'required',
            'content' => 'required',
        ]);
        $imageName = $row->image;
        if ($request->has('image')) {
            $image     = $request->file('image');
            $imageName = date('dmYiHs') . '.' . $image->extension();
            $image->move('./upload/signature/', $imageName);
            if (file_exists('./upload/signature/'. $row->image)){
                unlink('./upload/signature/'. $row->image);
            }
        }
        $signature = Signature::where('id', $row->id)->update([
            'name'    => $request->name,
            'content' => json_encode($request->content),
            'image'   => $imageName
        ]);

        return redirect()->to(route('signatures.index'))->with(['success' => 'Signature successfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Signature::where('id', $id)->first();
        if (file_exists('./upload/signature/'. $row->image)){
            unlink('./upload/signature/'. $row->image);
        }

        $row->delete();
        return redirect()->back();
    }
}
