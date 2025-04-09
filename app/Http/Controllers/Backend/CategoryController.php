<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where(function ($q) use ($request) {
            $q->where('title', 'LIKE', '%' . $request->q . '%');
            $q->orWhere('slug', 'LIKE', '%' . $request->q . '%');
        })->latest()->paginate(15);
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.update');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
                                            'title'            => ['required', 'string', 'max:255'],
                                            'slug'             => ['required', 'alpha_dash', 'unique:categories'],
                                            'meta_title'       => ['required'],
                                            'meta_description' => ['required'],
                                        ]);

        $data             = $request->except('_token');
        $data['index_status']       = $request->index_status ?? 1;
        DB::beginTransaction();
        try {
            $category = Category::create($data);
            DB::commit();
            return redirect()->back()->with('success', 'Category added successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', 'Something went wrong please try again!');
        }
    }

    public function edit($id)
    {
        $row = Category::where('id', $id)->first();

        return view('backend.category.update', compact('row'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
                                            'title'            => ['required', 'string', 'max:255'],
                                            'slug'             => ['required', 'alpha_dash', Rule::unique('categories')->ignore($id)],
                                            'meta_title'       => ['required'],
                                            'meta_description' => ['required'],
                                        ]);
        $data         = $request->except('_token','_method');
        $data['index_status']       = $request->index_status ?? 1;

        DB::beginTransaction();

        try {
            $category = Category::where('id', $id)->update($data);
            DB::commit();
            return redirect()->back()->with('success', 'Category updated successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', $ex->getMessage());
        }
    }
    public function destroy($id)
    {
        if($id != 1){
            Category::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Category deleted successfully.');
        }
        return redirect()->back()->with('error-message', 'Something went wrong try again');

    }
}
