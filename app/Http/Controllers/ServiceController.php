<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service_detail($service){
        $pageData  = self::pageData($service, 'service');
        return view('index', compact('pageData'));
    }

    public function sub_service_detail($service, $sub_service){ 
        $pageData  = self::pageData($service, 'sub service', $sub_service);
        return view('index', compact('pageData'));
    }
}
