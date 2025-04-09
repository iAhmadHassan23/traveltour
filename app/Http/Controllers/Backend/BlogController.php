<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::where(function ($q) use ($request) {
            $q->where('title', 'LIKE', '%' . $request->q . '%');
            $q->orWhere('slug', 'LIKE', '%' . $request->q . '%');
        })->latest()->paginate(15);
        return view('backend.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blog.update')->with('categories', Category::get());
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'slug'         => ['required', 'alpha_dash', 'unique:blogs'],
            'category_id'  => ['required'],
            //                                            'meta_title'       => ['required'],
            //                                            'meta_description' => ['required'],
            //                                            'video_url'        => ['required', 'url'],
            'index_status' => ['required'],
            'status'       => ['required'],
        ], [
            'category_id.required' => 'The category field is required',
            //                                            'video_url.required'   => 'The video url field is required',
        ]);

        $data = $request->except('_token', 'gallery');
        DB::beginTransaction();
        try {
            $data['media'] = json_encode($request->gallery);
            $category      = Blog::create($data);
            DB::commit();
            return redirect()->back()->with('success', 'Blog added successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', 'Something went wrong please try again!');
        }
    }

    public function edit($id)
    {
        $row        = Blog::where('id', $id)->first();
        $categories = Category::get();
        return view('backend.blog.update', compact('row', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'slug'         => ['required', 'alpha_dash', Rule::unique('blogs')->ignore($id)],
            'category_id'  => ['required'],
            'index_status' => ['required'],
            'status'       => ['required'],
        ], [
            'category_id.required' => 'The category field is required',
        ]);
        $data      = $request->except('_token', '_method', 'files', 'gallery');
        DB::beginTransaction();

        try {
            $data['media'] = json_encode($request->gallery);
            $blog          = Blog::where('id', $id)->update($data);
            DB::commit();
            return redirect()->back()->with('success', 'Blog updated successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
            Blog::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Blog deleted successfully.');
      
        return redirect()->back()->with('error-message', 'Something went wrong try again');

    }
}
