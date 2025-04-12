<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Itenary;
use App\Models\ItenaryExclusive;
use App\Models\Tour;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Iterator;

class ItenaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itenaries = Itenary::with('itenaryExclusives', 'tour')->where(function ($q) use ($request) {
            $q->where('title', 'LIKE', '%' . $request->q . '%');
        })->latest()->paginate(15);
        return view('backend.itenaries.index', compact('itenaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.itenaries.update')->with('tours', Tour::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'day_number' => ['required'],
            'title' => ['required'],
            'short_description' => ['required'],
            'tour_id' => ['required']
        ]);

        DB::beginTransaction();

        try {
            $itenary = Itenary::create($validatedData);

            if ($request->has('exclusives')) {
                foreach ($request->exclusives as $title => $data) {
                    if (isset($data['enabled'])) {
                        ItenaryExclusive::create([
                            'itenary_id' => $itenary->id,
                            'title' => $title,
                            'heading' => $data['heading'],
                        ]);
                    }
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Itenary created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error-message', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row        = Itenary::with('itenaryExclusives')->findOrFail($id);
        $tours = Tour::get();

        $exclusiveStay = null;
        $exclusiveMeals = null;
        $exclusiveTransport = null;

        if ($row->itenaryExclusives) {
            $exclusiveStay = $row->itenaryExclusives->where('title', 'stay')->first();
            $exclusiveMeals = $row->itenaryExclusives->where('title', 'meals')->first();
            $exclusiveTransport = $row->itenaryExclusives->where('title', 'transportation_by')->first();
        }


        return view('backend.itenaries.update', compact('row', 'tours', 'exclusiveStay', 'exclusiveMeals', 'exclusiveTransport'));
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

        $validatedData = $request->validate([
            'day_number' => ['required'],
            'title' => ['required'],
            'short_description' => ['required'],
            'tour_id' => ['required']
        ]);
        DB::beginTransaction();

        try {
            $itenary = Itenary::findOrFail($id);
            $itenary->update($validatedData);
            $itenary->itenaryExclusives()->delete();

            foreach ($request->exclusives as $title => $data) {
                if (isset($data['enabled'])) {
                    ItenaryExclusive::create([
                        'itenary_id' => $itenary->id,
                        'title' => $title,
                        'heading' => $data['heading'],
                    ]);
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'Itenary updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error-message', $e->getMessage());
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
        $itenary = Itenary::findOrFail($id);
        $itenary->itenaryExclusives()->delete();
        $itenary->delete();

        return redirect()->back()->with('success', 'Itenary & Itenary Exclusives deleted successfully.');

        return redirect()->back()->with('error-message', 'Something went wrong try again');
    }
}
