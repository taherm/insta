<?php
use InstagramScraper\Instagram;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\Paginator;
use App\Category;


Route::get('/', function () {
    $instagram = new Instagram();
    $nonPrivateAccountMedias = $instagram->getMedias('familyfunkw',12);
    return view('index')->with('images',$nonPrivateAccountMedias);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/menu/{url}','AdminController@display');
Route::get('admin','AdminController@index');
Route::get('admin/saved-posts','AdminController@posts');
Route::post('admin/user-account','AdminController@account');
Route::post('logout-user','AdminController@logout');
Route::get('admin/account',function () {
    if(Session::has('account'))
    {
        return redirect('/admin/page');
    }
    else{
        return view('admin.account');
    }
});
Route::get('admin/page','AdminController@show');
Route::post('sub-menu','AdminController@submenu');
Route::post('main-menu','AdminController@mainmenu');
Route::post('add-post','AdminController@store');
Route::delete('admin/delete-post/{id}','AdminController@destroy');
Route::get('admin/{id}/edit_menu','AdminController@edit_menu');
Route::post('admin_edit/{id}','AdminController@updatemenu');
Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
});
Route::get('admin/menu', function () {
    $sub=\App\Category::with('children')->where('parent_id','=',0)->get();
    $cat =Category::all();
    return view('admin.menu',compact('cat','sub'));
});
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
});
Route::delete('admin/delete-menu/{id}','AdminController@del');
Route::delete('admin/submenu_edit','AdminController@editsub');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
