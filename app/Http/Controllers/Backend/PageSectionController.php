<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use App\Models\Page;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PageSectionController extends Controller
{
    public function page_section(Request $request, $page_id)
    {
        $content_sections = PageSection::where('page_id', $page_id)->orderBy('sort_by', 'asc')->paginate(15);
        $page             = Page::where('id', $page_id)->first();
         if(is_null($page)){
            return redirect()->to(url()->full());
        }
        $pages = Page::get();
        return view('backend.page_section.index', compact('content_sections', 'page', 'pages'));
    }


    public function page_section_create(Request $request, $page_id)
    {
        $page = Page::where('id', $page_id)->first();
          if(is_null($page)){
            return redirect()->to(url()->full());
        }

        return view('backend.page_section.update', compact('page'));
    }

    public function pageStoreSection(Request $request, $page_id)
    {
        $request->validate([
            'section_title' => ['required', 'string', 'max:255'],
        ]);

        $data = $request->except('_token', '_method', 'files');
        DB::beginTransaction();
        try {
            $data['content'] = json_encode($request->content);
            $data['page_id'] = $page_id;
            $section         = PageSection::create($data);

            if ($section->section == 'section_7' || $section->section == 'section_3') {
                if (isset($request->content['services_required']) && $request->content['services_required'] == 'Selected Services') {
                    $section->selected_services()->sync($request->services);
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Section added successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', $ex->getMessage());
        }
    }

    public function sectionEdit($id, $section)
    {
        $row      = PageSection::with('selected_services')->where('id', $id)->first();
        if(is_null($row)){
            return redirect()->to(url()->full());
        }
        $page_id  = $row->page_id;
        $model_id = $row->tool_code;

        return view('backend.page_section.components.' . $row->section, compact('row', 'page_id', 'model_id'));
    }

    public function UpdateSection(Request $request, $section_id)
    {
        $validated = $request->validate([
            'section_title' => ['required', 'string', 'max:255'],
        ]);

        $data = $request->except('_token', '_method', 'files');
        DB::beginTransaction();
        try {
            $section         = PageSection::find($section_id);
            $data['content'] = json_encode($request->content);
            $section->update($data);

            if ($section->section == 'section_7' || $section->section == 'section_3') {
                if (isset($request->content['services_required']) && $request->content['services_required'] == 'Selected Services') {
                    $section->selected_services()->sync($request->services);
                } else {
                    $section->selected_services()->sync([]);
                }
            }

            DB::commit();
//            if ($section->page_id) {
//                $page = Page::find($section->page_id);
////                $this->storeCache($page);
//            } else {
//                $tool = Tool::where('tool_code', $section->tool_code)->first();
////                $this->storeToolCache($tool);
//            }
            return redirect()->back()->with('success', 'Section updated successfully!');
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('error-message', $ex->getMessage());
        }
    }

    public function changeStatus($id)
    {
        $section = PageSection::find($id);
        $section->update(['status' => ($section->status == 0 ? 1 : 0)]);
//        if ($section->page_id) {
//            $page = Page::find($section->page_id);
//            $this->storeCache($page);
//        } else {
//            $tool = Tool::where('tool_code', $section->tool_code)->first();
//            $this->storeToolCache($tool);
//        }
        return checkStatus($section->status);

    }

    public function sectionSorting(Request $request)
    {
        foreach ($request->order as $order) {
            PageSection::where('id', $order['id'])
                ->update([
                    'sort_by' => $order['position']
                ]);
        }
        return 1;
    }

    public function deleteSection($id)
    {
        $section = PageSection::find($id);
        $section->selected_services()->sync([]);
        $section->delete();

        return redirect()->back()->with('success', 'Section deleted successfully!');
    }


    public function create_section()
    {
        return view('backend.page_section.create_section');
    }

    public function create_section_store(Request $request)
    {
        $request->validate([
            'section_name'             => 'required',
            'image'                    => 'required',
            'backend_section_content'  => 'required',
            'frontend_section_content' => 'required',
            'section_css'              => 'required',
        ]);

        $folderPath = './dashboard/sections/';
        $files      = [];
        if (is_dir($folderPath)) {
            $filesAndDirs = scandir($folderPath);
            $fileNames    = array_filter($filesAndDirs, function ($item) use ($folderPath) {
                return !is_dir($folderPath . '/' . $item) && $item !== '.' && $item !== '..';
            });
            natsort($fileNames);
            foreach ($fileNames as $file) {
                $keyname = explode('.', $file);
                if($keyname[0] == $request->section_name){
                    return redirect()->back()->withInput()->withErrors(['section_name' => 'section name must be unique']);
                }

            }
        }


        if ($request->has('image')) {
            $image     = $request->file('image');
            $imageName = $request->section_name . '.' . $image->extension();
            $image->move($folderPath, $imageName);

            $cssFilePath = './assets/css/sections/'.$request->section_name.'.css';
            if (!file_exists($cssFilePath)) {
                $cssContent = $request->section_css;
                file_put_contents($cssFilePath, $cssContent);
            }

            $viewFilePath = resource_path('views/components/'. $request->section_name . '.blade.php');
            if (!file_exists($viewFilePath)) {
                $frontEndContent = $request->frontend_section_content;
                file_put_contents($viewFilePath, $frontEndContent);
            }

            $backendViewFilePath = resource_path('views/backend/page_section/components/'. $request->section_name . '.blade.php');
            if (!file_exists($backendViewFilePath)) {
                $backendContent = $request->backend_section_content;
                file_put_contents($backendViewFilePath, $backendContent);
            }
            return redirect()->back()->with('success', 'Section created successfully!');
        }
        return redirect()->back()->with('error', 'something went wrong');

    }

    public function duplicateRow(Request $request, $id)
    {
        $request->validate([
            'page_id' => 'required|array',
            'page_id.*' => 'required|exists:pages,id'
        ]);

        // Find the blog post by its ID
        $row = PageSection::find($id);
        DB::beginTransaction();
        if ($row) {
            // Convert the blog model to an array
            $newSectionData = $row->toArray();
            unset($newSectionData['id']);

            foreach($request->page_id as $page_id){
                $newSectionData['page_id'] = $page_id;
                $newSection = PageSection::create($newSectionData);
            }


            DB::commit();
//            DB::rollback();
            return response()->json(['message' => 'Section duplicated successfully.', 'new_blog' => $newSection], 200);
        } else {
            return response()->json(['message' => 'Section post not found.'], 404);
        }
    }




    /*
     *
     *  CODE MOVE TO UPPER SIDE
     *
     * */


//
//    public function storeSection(Request $request, $model_id)
//    {
//        dd($request->content['services_required']);
//        $validated = $request->validate([
//            'section_title' => ['required', 'string', 'max:255'],
//        ]);
//
//        $data = $request->except('_token', '_method', 'files');
//        DB::beginTransaction();
//        try {
//            $data['content']   = json_encode($request->content);
//            $data['tool_code'] = $model_id;
//            $section = PageSection::create($data);
//
//            if($section->section == 'section_7'){
//                if(isset($request->content['services_required'])){
//
//                }
//            }
//            DB::commit();
//            return redirect()->back()->with('success', 'Section added successfully!');
//        } catch (Exception $ex) {
//            DB::rollback();
//            return redirect()->back()->with('error-message', $ex->getMessage());
//        }
//    }
//


//
//    private function storeCache($page)
//    {
//        if (Cache::has($page->slug)) {
//            Cache::forget($page->slug);
//        }
//        Cache::forever($page->slug, Page::query()->with(['sections' => function ($q) {
//            return $q->active()->orderBy('sort_by', 'asc');
//        }])->where('slug', $page->slug)->first());
//    }

//    private function storeToolCache($tool)
//    {
//        if (Cache::has($tool->slug)) {
//            Cache::forget($tool->slug);
//        }
//        Cache::forever($tool->slug, Tool::query()->with(['sections' => function ($q) {
//            return $q->active()->orderBy('sort_by', 'asc');
//        }])->where('slug', $tool->slug)->first());
//    }


//    public function updateSection(Request $request)
//    {
//        $validated = $request->validate([
//                                            'section_title'        => ['required', 'string', 'max:255'],
//                                        ]);
//
//        $data      = $request->except('_token', '_method','files','gallery');
//        DB::beginTransaction();
//
//        try {
//            $data['media'] = json_encode($request->gallery);
//            $blog = Blog::where('id', $id)->update($data);
//            DB::commit();
//            return redirect()->back()->with('success', 'Section updated successfully!');
//        } catch (Exception $ex) {
//            DB::rollback();
//            return redirect()->back()->with('error-message', $ex->getMessage());
//        }
//    }

}
