<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Menu;

class TestController extends Controller
{
    public function save()
    {
        $url=Input::get('url');
        //dd($url);
        $menu = new Menu;
     $menu->image = $url;
     $menu->save();

     return redirect('/open/1');
    }
}
