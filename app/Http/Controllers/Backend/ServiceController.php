<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function __construct()
    {}

    public function index()
    {
        $pages = Page::whereNull('parent_id')->where('type', 'service')->get();
        return view('backend.services.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.services.update');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'unique:pages'],
        ]);
        $data      = $request->except('_token', 'files');

        DB::beginTransaction();
        try {
            $data['type'] = 'service';
            $data['content'] = json_encode($request->content);
            $page         = Page::create($data);
            DB::commit();
//            $this->storeCache($page);
            return redirect()->back()->with('success', 'Service added successfully!');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', 'Something went wrong please try again!')->withInput();
        }
    }

//    public function storeCache($page)
//    {
//        if (Cache::has($page->slug)) {
//            Cache::forget($page->slug);
//        }
//        Cache::forever($page->slug, Page::query()->with(['sections' => function ($q) use ($page) {
//            return $q->active()->orderBy('sort_by', 'asc');
//        }])->where('slug', $page->slug)->first());
//    }

    public function edit($id)
    {
        $row          = Page::whereNull('parent_id')->where('id', $id)->where('type', 'service')->first();
        $row->content = json_decode($row->content, true);
        return view('backend.services.update', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'unique:pages,slug,' . $id],
        ]);
        $data      = $request->except('_token', 'files');
        DB::beginTransaction();
        try {
            $page = Page::find($id);
            $data['content'] = json_encode($request->content);
            $page->update($data);
            DB::commit();
//            $this->storeCache($page);
            return redirect()->back()->with('success', 'Service Updated successfully!');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', 'Something went wrong please try again!')->withInput();
        }
    }

    public function changeIndexStatus($id)
    {
        $page = Page::find($id);
        $page->update(['index_status' => ($page->index_status == 0 ? 1 : 0)]);
//        $this->storeCache($page);
        return indexStatus($page->index_status);

    }

    public function changeStatus($id)
    {
        $page = Page::find($id);
        $page->update(['status' => ($page->status == 0 ? 1 : 0)]);
//        $this->storeCache($page);
        return publishStatus($page->status);

    }
}
