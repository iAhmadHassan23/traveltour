<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function pageData($slug, $page_type, $sub_service = null){
        $pageData = Page::query()->with(['sections' => function ($q) {

            return $q->with(['selected_services' => function($q){
                $q->active();
            }])
                ->active()
                ->orderBy('sort_by', 'asc')
                ->select('id', 'sort_by', 'page_id', 'content', 'section', 'section_title', 'status')
                ->get();

        }]);
        if(!is_null($sub_service)){
            $pageData = $pageData->whereHas('service', function($q) use ($slug) {
                $q->where('slug', $slug);
            })->where('sub_slug', $sub_service);
        }else{
            $pageData = $pageData->where('type', $page_type)->where('slug', $slug);
        }


        $pageData = $pageData->active()->firstOrFail(); 
        if (isset($pageData)) {
            $pageData->content = json_decode($pageData->content, true);
        }

//        $cssFile = PageSection::whereHas('page', function($q) use ($pageData){
//            return $q->where('id', $pageData->id);
//        }) ->active()->pluck('section')->toArray();
//        session()->put('cssFiles', $cssFile);

        return $pageData;
    }
}
