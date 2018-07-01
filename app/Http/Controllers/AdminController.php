<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Slider;
use App\Image;


use App\Portfolio;
use Storage;
use File;
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
        //$instagram = Instagram::withCredentials('courtside.blr', 'aqamoula');
        //$instagram->login(); // will use cached session if you can force login $instagram->login(true)
        //$images = $instagram->getMedias('courtside.blr', 100);
        //return view('admin.pages',compact('images','imagesFromDB'));
        $instagram = new Instagram();
        $nonPrivateAccountMedias = $instagram->getMedias('ideasowners',16);
        return view('admin.pages')->with('images',$nonPrivateAccountMedias);
    }


    public function portfolio()
    {
        $ser = Portfolio::all();
        return view('admin.portfolios', compact('ser'));
    }


    public function display($url)
    {
        $ser = Category::where('title',$url)->first();
       // dd($ser);
       $name=$url;
        $images=$ser->images;
        //dd($name);
        return view('gallery',compact('images','name'));
    }


    public function delete_slider()
    {
        Slider::where('image', request('image'))->delete();
        session()->flash('message','Slider Deleted!');
        return redirect('/admin/delete-slider');
    }

    public function add_slider(Request $request)
    {
        $this->validate(request(), [
            'image' => 'required'
        ]);
        $slide = new Slider;
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $slide->image = $fullImagePath;
        $slide->save();
        session()->flash('message','Slider Added!');
        
        return redirect('/admin/add-slider');
    }


    public function edit_menu($id)
    {
        $serv = Category::find($id);
        return view('admin.menu_edit', compact('serv'));
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


    public function edit($id)
    {
        $serv = Service::find($id);
        return view('admin.edit', compact('serv'));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'image' => 'required',
            'icon'=>'required'
        ]);
        $serv = Service::find($id);
        $fn = $serv->title;
        $serv->title = request('title');
        $serv->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $serv->image = $fullImagePath;
        $icon = request()->icon;
        $iconName = md5(uniqid(rand() * (time()))) . '.' . $icon->getClientOriginalExtension();
        $savePath = public_path() . self::UPLOAD_PATH . $iconName;
        Image::make($icon)->save($savePath, 100);
        $fullIconPath =$iconName;
        $serv->icon = $fullIconPath;
        $serv->menu_id=Menu::where('title',request('menu'))->first()->id;
        $serv->save();
        session()->flash('message','Page Updated!');
       
        return redirect('/admin');
    }


    public function edit_portfolio($id)
    {
        $this->validate(request(), [
            'image' => 'required',
            'tag'=>'required'
        ]);
        $portfolio = Portfolio::find($id);
        $fn = $portfolio->title;
        $portfolio->title = request('title');
        $portfolio->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $portfolio->image = $fullImagePath;
        $portfolio->tag = request('tag');
        $portfolio->weblink = request('weblink');
        $portfolio->menu_id=Menu::where('title',request('menu'))->first()->id;
        $portfolio->save();
        session()->flash('message','Portfolio Edited!');
      
        return redirect('/admin');
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
      
        
        $image = new Image;
        $image->url = request('image');
        $image->save();

$image->categories()->attach(Category::where('title',request('submenu'))->first()->id);

        session()->flash('message','Post Added!');
       
        return redirect('/admin');
    }


    public function add_portfolio()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'tag'=>'required'
            

        ]);
        $portfolio = new Portfolio();
        $portfolio->title = request('title');
        $portfolio->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $portfolio->image = $fullImagePath;
        $portfolio->tag = request('tag');
        $portfolio->weblink = request('weblink');
        $portfolio->menu_id=Menu::where('title',request('submenu'))->first()->id;
       
        $portfolio->save();
        session()->flash('message','Portfolio Added!');
      
        return redirect('/admin');
    }


    public function destroy($id)
    {
        $serv = Service::find($id);
        File::delete('uploads/'.$serv->image);
        File::delete('uploads/'.$serv->icon);
        $serv->delete();
        session()->flash('message','Page Deleted!');
    
        return redirect('/admin');
    }


    public function delete_portfolio($id)
    {

        $portfolio = Portfolio::find($id);
        File::delete('uploads/'.$portfolio->image);
        $portfolio->delete();
        session()->flash('message','Portfolio Deleted!');
      
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
