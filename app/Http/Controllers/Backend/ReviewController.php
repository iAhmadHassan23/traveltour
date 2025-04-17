<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::get();
        return view('backend.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.review.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title'        => ['required', 'string', 'max:255'],
                'description' => ['nullable', 'string']
            ]
        );
        $data = $request->except('_token', 'gallery');

        DB::beginTransaction();
        try {
            $data['media'] = json_encode($request->gallery);
            $tour = Review::create($data);

            DB::commit();
            return redirect()->back()->with('success', 'Review added successfully!');
        } catch (Exception $ex) {
            dd($ex);
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
        $row        = Review::where('id', $id)->first();
        return view('backend.review.update', compact('row'));
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
        $validated = $request->validate(
            [
                'title'        => ['required', 'string', 'max:255'],
                'description'        => ['nullable', 'string', 'max:255'],
            ]
        );

        $data = $request->except('_token', '_method', 'files', 'gallery');

        DB::beginTransaction();

        try {
            $data['media'] = json_encode($request->gallery);

            $tour = Review::where('id', $id)->update($data);

            DB::commit();
            return redirect()->back()->with('success', 'Review updated successfully!');
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
        Review::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');

        return redirect()->back()->with('error-message', 'Something went wrong try again');
    }
}
