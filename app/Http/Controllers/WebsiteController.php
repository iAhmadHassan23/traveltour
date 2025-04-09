<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Http\Request;
use App\Models\Blog;
use Mail; 

class WebsiteController extends Controller
{
    public function index($page = 'home'){

        $pageData  = self::pageData($page, 'page');
        return view('index', compact('pageData'));
    }

//    public function service($service){
//
//        $pageData = Page::query()->with(['sections' => function ($q) {
//
//            return $q->with('selected_services')
//                ->active()
//                ->orderBy('sort_by', 'asc')
//                ->select('id', 'sort_by', 'page_id', 'content', 'section', 'section_title')
//                ->get();
//
//        }])->where('type', 'service')->where('slug', $service)->first();
//
//        if (isset($pageData)) {
//            $pageData->content = json_decode($pageData->content, true);
//        }
//
//        $cssFile = PageSection::whereHas('page', function($q) use ($pageData){
//            return $q->where('id', $pageData->id);
//        }) ->active()->pluck('section')->toArray();
//        session()->put('cssFiles', $cssFile);
//        return view('index', compact('pageData'));
//    }

    public function page_css_marge($page){
        $cssContent = '';
        $cssFile = PageSection::whereHas('page', function($q) use ($page){
            return $q->where('slug', $page)->orWhere('sub_slug', $page);
        }) ->active()->pluck('section')->toArray();
        if(count($cssFile) > 0){
            foreach ($cssFile as $file) {
                $file = public_path('assets/css/sections/'.$file .'.css');
                if(file_exists($file)){
                    $cssContent .= file_get_contents($file);
                }
            }
        }
        return response($cssContent)->header('Content-Type', 'text/css');
    }

//    public function css_marge(){
//        $cssContent = '';
//        if(session()->has('cssFiles')){
//            $cssFiles = session()->get('cssFiles');
//            foreach ($cssFiles as $file) {
//                $file = public_path('assets/css/sections/'.$file .'.css');
//                if(file_exists($file)){
//                    $cssContent .= file_get_contents($file);
//                }
//            }
//        }
//
//        return response($cssContent)->header('Content-Type', 'text/css');
//    }
    public function contact(){
        return view("contact-us");
    }

    public function contact_us(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'phone'=>'required',
        ]);
        $request->merge(['user_ip' => request()->ip()]);
        Mail::send('email.email', ['request' => $request], function ($message) use ($request) {
            $message->to(env('MAIL_TO', 'info@ozcleaningperth.com.au'))->subject
            ($request->subject);
            $message->from('info@ozcleaningperth.com.au', 'Contact us');
        });

        return redirect()->back()->with('message','Thank you for contacting');

    }
}
