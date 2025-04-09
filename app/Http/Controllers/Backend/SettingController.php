<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Setting;

class SettingController extends Controller
{

    public function __construct()
    {

    }

    function index($page)
    {
        $setting = Setting::where('key' , $page)->first();
        if($setting){

            $setting = json_decode($setting->values, true);
        }
        return view('backend.setting.' . $page, compact('setting'));
    }


    public function update(Request $request, $page)
    {
        Setting::updateOrCreate([
            'key' => $page
        ], [
            'values' => json_encode($request->settings)
        ]);

        if(isset($request->settings['header_logo']) && !is_null($request->settings['header_logo']) &&  public_path('/media/'.$request->settings['header_logo'])){
            copy(public_path('/media/'.$request->settings['header_logo']), public_path('/images/logo.png'));
        }
//
//        $path = base_path('.env');
//        foreach ($request->setting as $key => $value) {
//            Setting::updateOrCreate([
//                'key' => $key
//            ], [
//                'value' => $value
//            ]);
//            $oldValue = env($key);
//
//            if ($oldValue !== $value) {
//                file_put_contents(
//                    $path, str_replace(
//                        $key.'="'.$oldValue.'"',
//                        $key.'="'.$value.'"',
//                        file_get_contents($path)
//                    )
//                );
//            }
//        }

        return redirect()->back()->with('success', 'Setting update successfully');
    }


}
