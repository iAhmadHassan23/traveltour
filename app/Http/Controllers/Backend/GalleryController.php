<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{


    public function index(){
        $gallery_images = Gallery::where('name', 'LIKE', '%'. request('q'). '%')->paginate(20);

        if(request()->ajax()){
            $html = view('backend.component.gallery_images', compact('gallery_images'))->render();
            return response()->json([
                'html' => $html,
                'data_length' =>  count($gallery_images)
            ]);
        }
        return view('backend.gallery.index', compact('gallery_images'));
    }
    public function delete(Request $request,$id){
        $gallery = Gallery::where('id', $id)->first();
        $file = './media/'.$gallery->image;
        if($gallery->delete()){
            if(file_exists($file)){
                unlink($file);
            }
        }
        return 1;
    }

    public function replace_image(Request $request, $gallery_id){
        $request->validate([
            'image' => 'required'
        ]);
        $gallery  = Gallery::where('id', $gallery_id)->first();
        if ($gallery){
            if ($request->has('image')){
                $image = $request->file('image');
                $imageName = $gallery->name . '.' . $image->extension();
                $image->move('./media/', $imageName);
            }
        }
        return ['url' => '/media/'. $imageName];
    }

    public function image_upload(Request $request){
        $request->validate([
            'image' => 'required',
            'image_name' => 'required|unique:galleries,name'
        ]);
        if ($request->has('image')){
            $image = $request->file('image');
            $imageName = $request->image_name . '.' . $image->extension();
            $image->move('./media/', $imageName);

            $gallery = Gallery::create([
                'image' => $imageName,
                'name' => $request->image_name
            ]);
            return [
                'url' => $imageName,
                'id' => $gallery->id ,
                'image' => $imageName,
                'remove_rul' => route('remove.gallery.image',$gallery->id),
                'replace_rul' => route('gallery.image.replace', $gallery->id),
            ];
        }

    }
}
