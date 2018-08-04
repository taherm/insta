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
Route::get('admin','AdminController@index')->middleware('auth');
Route::get('admin/saved-posts','AdminController@posts')->middleware('auth');;
Route::post('admin/user-account','AdminController@account')->middleware('auth');;
Route::post('logout-user','AdminController@logout');
Route::get('admin/account',function () {
    if(Session::has('account'))
    {
        return redirect('/admin/page');
    }
    else{
        return view('admin.account');
    }
})->middleware('auth');
Route::get('admin/page','AdminController@show')->middleware('auth');
Route::post('sub-menu','AdminController@submenu')->middleware('auth');
Route::post('main-menu','AdminController@mainmenu')->middleware('auth');
Route::post('add-post','AdminController@store')->middleware('auth');
Route::delete('admin/delete-post/{id}','AdminController@destroy')->middleware('auth');
Route::get('admin/{id}/edit_menu','AdminController@edit_menu')->middleware('auth');
Route::post('admin_edit/{id}','AdminController@updatemenu')->middleware('auth');
Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
})->middleware('auth');
Route::get('admin/menu', function () {
    $sub=\App\Category::with('children')->where('parent_id','=',0)->get();
    $cat =Category::all();
    return view('admin.menu',compact('cat','sub'));
})->middleware('auth');
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
})->middleware('auth');
Route::delete('admin/delete-menu/{id}','AdminController@del')->middleware('auth');
Route::delete('admin/submenu_edit','AdminController@editsub')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
