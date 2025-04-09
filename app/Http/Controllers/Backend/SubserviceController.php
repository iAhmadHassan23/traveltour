<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SubserviceController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $pages    = Page::with('service')->whereNotNull('parent_id')->where('type', 'sub service')->get();
        return view('backend.sub_services.index', compact('pages'));
    }

    public function create()
    {
        $services = Page::whereNull('parent_id')->where('type', 'service')->get();

        return view('backend.sub_services.update', compact('services'));
    }

    public function store(Request $request)
    {
        $request['slug'] = $request['sub_slug'] . '-' . date('YmdHis');
        $validated = $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'sub_slug'  => ['required', 'string', 'max:255'],
            'slug'      => ['required', 'unique:pages'],
            'parent_id' => ['required'],
        ]);
        $data      = $request->except('_token', 'files');

        $service = Page::where('parent_id', $request->parent_id)->where('sub_slug', $request->sub_slug)->exists();

        if($service){
            return redirect()->back()->withErrors(array('slug' => 'This slug is already exist'))->withInput();
        }


        DB::beginTransaction();
        try {
            $data['type']    = 'sub service';
            $data['content'] = json_encode($request->content);
            $page            = Page::create($data);
            DB::commit();
//            $this->storeCache($page);
            return redirect()->back()->with('success', 'Sub service added successfully!');
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
        $services     = Page::whereNull('parent_id')->where('type', 'service')->get();
        $row          = Page::whereNotNull('parent_id')->where('id', $id)->where('type', 'sub service')->first();
        $row->content = json_decode($row->content, true);
        return view('backend.sub_services.update', compact('row', 'services'));
    }

    public function update(Request $request, $id)
    {
        $page            = Page::find($id);
        $validated = $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'sub_slug'  => ['required', 'string', 'max:255'],
            'parent_id' => ['required'],
            //            'slug' => ['required', 'unique:pages,slug,' . $id],
        ]);
        $data      = $request->except('_token', 'files');

        $service_check = Page::where('parent_id', $request->parent_id)->where('sub_slug', $request->sub_slug)->exists();

        if($page->parent_id != $request->parent_id || $page->sub_slug != $request->sub_slug)
            if($service_check){
                return redirect()->back()->withErrors(array('slug' => 'This slug is already exist'))->withInput();
            }

        DB::beginTransaction();
        try {

            $data['content'] = json_encode($request->content);
            $page->update($data);
            DB::commit();
//            $this->storeCache($page);
            return redirect()->back()->with('success', 'Sub service Updated successfully!');
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
