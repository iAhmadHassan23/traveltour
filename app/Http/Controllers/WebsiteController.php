<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Itenary;
use App\Models\Tour;
use Mail;

class WebsiteController extends Controller
{
    public function index($page = 'home')
    {

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

    public function page_css_marge($page)
    {
        $cssContent = '';
        $cssFile = PageSection::whereHas('page', function ($q) use ($page) {
            return $q->where('slug', $page)->orWhere('sub_slug', $page);
        })->active()->pluck('section')->toArray();
        if (count($cssFile) > 0) {
            foreach ($cssFile as $file) {
                $file = public_path('assets/css/sections/' . $file . '.css');
                if (file_exists($file)) {
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

    public function home(Request $request)
    {
        $honeymoon_tours = Tour::whereHas('tour_categories', function ($query) {
            $query->where('title', 'Honeymoon Trips');
        })->get();

        $international_tours = Tour::whereHas('tour_categories', function ($query) {
            $query->where('title', 'International Trips');
        })->get();

        $domestic_tours = Tour::whereHas('tour_categories', function ($query) {
            $query->where('title', 'Domestic Trips');
        })->get();

        $leisure_luxury_tours = Tour::whereHas('tour_categories', function ($query) {
            $query->where('title', 'Leisure Luxury Trips');
        })->get();

        $family_tours = Tour::whereHas('tour_categories', function ($query) {
            $query->where('title', 'Family Trips');
        })->get();

        $adventure_tours = Tour::whereHas('tour_categories', function ($query) {
            $query->where('title', 'Adventure Trips');
        })->get();
        return view('home', compact(
            'honeymoon_tours',
            'international_tours',
            'domestic_tours',
            'leisure_luxury_tours',
            'family_tours',
            'adventure_tours'
        ));
    }

    public function tour_details($slug)
    {
        $tour = Tour::with('tour_categories', 'itenaries', 'highlights')->where('slug', $slug)->first();
        $itenary = Itenary::with('itenaryExclusives')->where('tour_id', $tour->id)->first();
        if ($tour->media) {
            $media = json_decode($tour->media);
        }
        return view('tour_details', compact('tour', 'itenary', 'media'));
    }

    public function contact()
    {
        return view("contact-us");
    }

    public function contact_us(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'required',
        ]);
        $request->merge(['user_ip' => request()->ip()]);
        Mail::send('email.email', ['request' => $request], function ($message) use ($request) {
            $message->to(env('MAIL_TO', 'info@ozcleaningperth.com.au'))->subject($request->subject);
            $message->from('info@ozcleaningperth.com.au', 'Contact us');
        });

        return redirect()->back()->with('message', 'Thank you for contacting');
    }
}
