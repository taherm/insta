<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use File;
use Intervention\Image\Facades\Image;
use InstagramScraper\Instagram;



class AdminController extends Controller
{
    const UPLOAD_PATH = '/uploads/';
    
    public function index()
    {
        return view('admin.index', compact(session('message')));
    }

    public function show()
    {
        if(session::has('account'))
        {
            $imagesArray = array();
            $linksArray = array();
            //$instagram = Instagram::withCredentials('courtside.blr', 'aqamoula');
            //$instagram->login(); // will use cached session if you can force login $instagram->login(true)
            //$images = $instagram->getMedias('courtside.blr', 100);
            //return view('admin.pages',compact('images'));
            $instagram = new Instagram();
            $images = $instagram->getMedias(session('account'),16);
            $account = $instagram->getAccount(session('account'));
            $username=$account->getFullName();
            foreach($images as $image)
            {
            $imagesArray[]=[explode("?", $image->getimageThumbnailUrl())[0],$image->getLink()];
            }
            //$savedImages=\App\Image::with('categories')->get();
            //return view('admin.pages')->with('images',$nonPrivateAccountMedias);
            return view('admin.pages',compact('imagesArray','linksArray','username'));
        }
        else
        {
            return view('admin.account', compact(session('message')));
        }
    }

    public function posts()
    {
        $imagesFromDB=\App\Image::all();
        return view('admin.posts')->with('images',$imagesFromDB);
    }

    public function display($url)
    {
        $ser = Category::where('title',$url)->first();
        $name=$url;
        $images=$ser->images;
        return view('gallery',compact('images','name'));
    }

    public function edit_menu($id)
    {
        $serv = Category::find($id);
        return view('admin.menu_edit', compact('serv'));
    }

    public function logout()
    {
        session()->forget('account');
        return redirect('/admin/account');
    }

    public function submenu()
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        $menu = new Category();
        $menu->title = request('title');
        $menu->parent_id = Category::where('title', request('submenu'))->first()->id;
        $menu->save();
        return redirect('/admin');
    }

    public function mainmenu()
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        $menu = new Category();
        $menu->title = request('title');
        $menu->parent_id='0';
        $menu->save();
        session()->flash('message','Main Menu Added!');
        return redirect('/admin');
    }

    public function account()
    {
        $this->validate(request(), [
            'account' => 'required'
        ]);
        session(['account' => request('account')]);
        return redirect('/admin/page');
    }

    public function updatemenu($id)
    {
        $temp = Category::find($id);
        $menu_name = $temp->title;
        $menu = Category::where('title', "=", $menu_name)->first();
        $menu->title = request('title');
        $menu->save();
        session()->flash('message','Menu Updated!');
        return redirect('/admin');
    }

    public function store()
    {
        $image = new \App\Image;
        $image_old= request('image');
        $image_temp=basename(parse_url($image_old)['path']);
        $savePath = public_path(self::UPLOAD_PATH . $image_temp);
        Image::make($image_old)->save($savePath, 100);
        $fullImagePath=$image_temp;
        $image->url=$fullImagePath;
        //dd($fullImagePath);
        $image->link= request('link');
        $image->save();
        $image->categories()->attach(Category::where('title',request('submenu'))->first()->id);
        session()->flash('message','Post Added!');
        return redirect('/admin');


        // $image = new Image;
        // $image->url = request('image');
        // $image->link= request('link');
        // $image->save();
        // $image->categories()->attach(Category::where('title',request('submenu'))->first()->id);
        // session()->flash('message','Post Added!');
        // return redirect('/admin');
    }

    public function destroy($id)
    {
        $item = \App\Image::find($id);
        $item->delete();
        File::delete('uploads/'.$item->url);
        session()->flash('message','Post Deleted!');
        return redirect('/admin');
    }

    public function del($id)
    {
        $menu = Category::find($id);
        $menu->delete();
        session()->flash('message','Main Menu Deleted!');
       
        return redirect('/admin');
    }

}