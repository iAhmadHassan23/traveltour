<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\RecentTrip;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecentTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = RecentTrip::get();
        return view('backend.trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trips.update');
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
                'title'        => ['nullable', 'string', 'max:255'],
            ]
        );
        $data = $request->except('_token', 'gallery');

        DB::beginTransaction();
        try {
            $data['media'] = json_encode($request->gallery);
            $tour = RecentTrip::create($data);

            DB::commit();
            return redirect()->back()->with('success', 'Recent Trip added successfully!');
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
        $row        = RecentTrip::where('id', $id)->first();
        return view('backend.trips.update', compact('row'));
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
                'title'        => ['nullable', 'string', 'max:255'],
            ]
        );
        
        $data = $request->except('_token', '_method', 'files', 'gallery');

        DB::beginTransaction();

        try {
            $data['media'] = json_encode($request->gallery);

            $tour = RecentTrip::where('id', $id)->update($data);

            DB::commit();
            return redirect()->back()->with('success', 'Recent Trip updated successfully!');
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
        RecentTrip::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Recent Trip deleted successfully.');

        return redirect()->back()->with('error-message', 'Something went wrong try again');
    }
}
