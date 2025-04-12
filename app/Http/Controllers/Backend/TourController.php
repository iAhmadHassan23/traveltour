<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Validation\Rule;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tours = Tour::where(function ($q) use ($request) {
            $q->where('title', 'LIKE', '%' . $request->q . '%');
            $q->orWhere('slug', 'LIKE', '%' . $request->q . '%');
        })->latest()->paginate(15);
        return view('backend.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tour.update')->with('categories', TourCategory::get());
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
            'title'        => ['required', 'string', 'max:255'],
            'slug'         => ['required', 'alpha_dash', 'unique:tours'],
            'tour_category_id'  => ['required'],
            'price' => ['required'],
            'discounted_price' => ['nullable'],
            'number_of_days' => ['nullable'],
            'number_of_nights' => ['nullable'],
            'pickup' => ['nullable'],
            'drop' => ['nullable'],
            'itenary_overview' => ['nullable'],
            'other_info' => ['nullable'],
            //                                            'meta_title'       => ['required'],
            //                                            'meta_description' => ['required'],
            //                                            'video_url'        => ['required', 'url'],
            'index_status' => ['required'],
            'status'       => ['required'],
            'transportation' => ['nullable'],
            'meals' => ['nullable'],
            'stay_included' => ['nullable'],
            'sight_seeing' => ['nullable'],
            'assistance' => ['nullable']
        ], [
            'tour_category_id.required' => 'The category field is required',
            //                                            'video_url.required'   => 'The video url field is required',
        ]);

        $data = $request->except('_token', 'gallery');
        DB::beginTransaction();
        try {
            $data['media'] = json_encode($request->gallery);
            $tour = Tour::create($data);
            DB::commit();
            return redirect()->back()->with('success', 'Tour added successfully!');
        } catch (Exception $ex) {
            DB::rollback();
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
        $row        = Tour::where('id', $id)->first();
        $categories = TourCategory::get();
        return view('backend.tour.update', compact('row', 'categories'));
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
            'title'        => ['required', 'string', 'max:255'],
            'slug'         => ['required', 'alpha_dash', Rule::unique('blogs')->ignore($id)],
            'tour_category_id'  => ['required'],
            'price' => ['required'],
            'discounted_price' => ['nullable'],
            'number_of_days' => ['nullable'],
            'number_of_nights' => ['nullable'],
            'pickup' => ['nullable'],
            'drop' => ['nullable'],
            'itenary_overview' => ['nullable'],
            'other_info' => ['nullable'],
            'index_status' => ['required'],
            'status'       => ['required'],
            'transportation' => ['nullable'],
            'meals' => ['nullable'],
            'stay_included' => ['nullable'],
            'sight_seeing' => ['nullable'],
            'assistance' => ['nullable']
        ], [
            'tour_category_id.required' => 'The tour category field is required',
        ]);

        $checkboxFields = ['transportation', 'meals', 'stay_included', 'sight_seeing', 'assistance'];
        foreach ($checkboxFields as $field) {
            $request[$field] = $request->has($field) ? 1 : 0;
        }

        $data      = $request->except('_token', '_method', 'files', 'gallery');
        DB::beginTransaction();

        try {
            $data['media'] = json_encode($request->gallery);
            $tour          = Tour::where('id', $id)->update($data);
            DB::commit();
            return redirect()->back()->with('success', 'Tour updated successfully!');
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
        Tour::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Tour deleted successfully.');

        return redirect()->back()->with('error-message', 'Something went wrong try again');
    }
}
