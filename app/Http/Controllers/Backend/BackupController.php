<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackupController extends Controller
{
    public function index(){
        $path = storage_path('app/'. config('backup.backup.name'));
        $files = File::files($path);
        return view('backend.backup.index', compact('files'));
    }

    public function download(Request $request){
        $request->validate([
            'path' => 'required'
        ]);
        return response()->download($request->path);
    }
}
