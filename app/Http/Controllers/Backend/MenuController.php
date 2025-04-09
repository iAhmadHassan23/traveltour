<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::whereNull('parent_id')->orderBy('sort_order', 'ASC')->get();
        return view('backend.menu.index', compact('menus'));
    }

    public function menu_update(Request $request)
    {
        $request->validate([
            'menu' => 'required',
        ]);
        $array_data = json_decode($request->menu, true);
        self::updateMenu($array_data);
        return redirect()->back()->with('message', 'menu update successfully');
    }

    function updateMenu($array_data, $parent_id = null)
    {
        foreach ($array_data as $key => $value) {
            $menu_find = Menu::where('id', $value['id'])->first();

            $data = [
                'parent_id'  => $parent_id,
                'label_menu' => $value['label'] ?? '#',
                'link'       => (empty($value['url'])) ? '#' : $value['url'],
                'sort_order' => $key
            ];

            if(!is_null($menu_find)) {
                $pa_id = $menu_find->id;
                $menu = $menu_find->update($data);
            }else{
                $menu = Menu::create($data);
                $pa_id = $menu->id;
            }

            if (array_key_exists('children', $value)) {
                self::updateMenu($value['children'], $pa_id);
            }
        }
    }

    public function menu_item_delete($menu_id){
        if(request()->ajax()){
            $menu = Menu::find($menu_id);
            $menu->delete();
            return 1;
        }
    }
}
