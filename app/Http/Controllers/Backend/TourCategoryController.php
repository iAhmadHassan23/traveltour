<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Exception;

class TourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = TourCategory::where(function ($q) use ($request) {
            $q->where('title', 'LIKE', '%' . $request->q . '%');
            $q->orWhere('slug', 'LIKE', '%' . $request->q . '%');
        })->latest()->paginate(15);
        return view('backend.tour_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tour_category.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'slug'             => ['required', 'alpha_dash', 'unique:tour_categories'],
            'meta_title'       => ['required'],
            'meta_description' => ['required'],
        ]);

        $data             = $request->except('_token');
        $data['index_status']       = $request->index_status ?? 1;
        try{
            TourCategory::create($data);
            return redirect()->back()->with('success', 'Tour Category added successfully!');
        }
        catch (Exception $ex) {
            return redirect()->back()->with('error-message', 'Something went wrong please try again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = TourCategory::where('id', $id)->first();

        return view('backend.tour_category.update', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'slug'             => ['required', 'alpha_dash', Rule::unique('tour_categories')->ignore($id)],
            'meta_title'       => ['required'],
            'meta_description' => ['required'],
        ]);
        $data         = $request->except('_token', '_method');
        $data['index_status']       = $request->index_status ?? 1;

        DB::beginTransaction();

        try {
            $category = TourCategory::where('id', $id)->update($data);
            DB::commit();
            return redirect()->back()->with('success', 'Tour Category updated successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != 1){
            TourCategory::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Tour Category deleted successfully.');
        }
        return redirect()->back()->with('error-message', 'Something went wrong try again');
    }
}
