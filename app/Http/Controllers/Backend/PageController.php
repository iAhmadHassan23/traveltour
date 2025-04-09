<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Models\PageSection;

class PageController extends Controller
{
    public function __construct()
    {


    }

    public function index()
    {
        $pages = Page::where('type', 'page')->get();
        return view('backend.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.pages.update');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'unique:pages']
        ]);
        $data      = $request->except('_token', 'files');

        DB::beginTransaction();
        try {
            $data['type'] = 'page';
            $page         = Page::create($data);
            DB::commit();
//            $this->storeCache($page);
            return redirect()->back()->with('success', 'Page added successfully!');
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
        $row          = Page::where('id', $id)->first();
        $row->content = json_decode($row->content, true);
        return view('backend.pages.update', compact('row'));
    }

    public function update(Request $request, $id)
    {
//        $validated = $request->validate([
//            'name' => ['required', 'string', 'max:255'],
//            'slug' => ['required', 'unique:pages,slug,' . $id],
//        ]);
        $data      = $request->except('_token', 'files');
        DB::beginTransaction();
        try {
            $page = Page::find($id);
            $page->update($data);
            DB::commit();
//            $this->storeCache($page);
            return redirect()->back()->with('success', 'Page Updated successfully!');
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

    public function destroy($page_id){
        $page = Page::where('id',$page_id)->first();
        if(Page::where('id',$page_id)->delete()){
            $sections = PageSection::where('page_id', $page_id)->get();
            foreach($sections as $section){
                $section->selected_services()->sync([]);
                $section->delete();
            }
        }
        return redirect()->back()->with('success', 'Deleted successfully!');
    }
}
