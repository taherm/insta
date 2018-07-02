<?php
use InstagramScraper\Instagram;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\Paginator;

use App\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    $instagram = new Instagram();
//$nonPrivateAccountMedias = $instagram->getMedias('aliaabhatt',100);
//dd($nonPrivateAccountMedias);


//return view('welcome')->with('images',$nonPrivateAccountMedias);
//});


Route::get('/', function () {
    $instagram = new Instagram();
    $nonPrivateAccountMedias = $instagram->getMedias('ideasowners',12);
    return view('index')->with('images',$nonPrivateAccountMedias);

});


Route::get('/yum/{url}', function ($url) {
    $instagram = new Instagram();
$nonPrivateAccountMedias = $instagram->getMedias('aliaabhatt',100);
return view('gallery')->with('images',$nonPrivateAccountMedias);
    });


Route::get('/menu/{url}','AdminController@display');


Route::get('/save','TestController@save');
 Route::get('/open/1', function () {
    $images = Category::all();
    //dd($images);
    return view('welcome2')->with('images', $images);
});

Route::get('/open/2', function () {
    $images = Category::all();
    return view('welcome2')->with('images', $images);
});

Route::get('/open/3', function () {
    $images = Category::all();
    return view('welcome2')->with('images', $images);
});



Route::get('admin','AdminController@index');
Route::get('admin/saved-posts','AdminController@posts');
Route::post('admin/slider','AdminController@add_slider');
Route::post('admin/album','AdminController@add_album');
Route::delete('admin/del-slider','AdminController@delete_slider');
Route::delete('admin/del-album','AdminController@delete_album');
Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
});
Route::get('admin/delete-album',function () {
    return view('admin.delete-album');
});
Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
});
Route::get('admin/add-album',function () {
    return view('admin.add-album');
});
Route::get('admin/page','AdminController@show');
Route::get('admin/create-page', function () {
    return view('admin.create-page');
});

Route::post('sub-menu','AdminController@submenu');
Route::post('main-menu','AdminController@mainmenu');
Route::post('add-post','AdminController@store');
Route::delete('admin/delete-post/{id}','AdminController@destroy');
Route::get('admin/{id}/edit','AdminController@edit');
Route::get('admin/{id}/edit_menu','AdminController@edit_menu');

Route::post('admin/{id}','AdminController@update');
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
