<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', function($view)
        {
            $categories = \App\Category::with('children')->where('parent_id','=',0)->get();
            $view->with('cat', $categories);
        });

        
    
    
        view()->composer('admin.menu', function($view)
        {
            $categories = \App\Category::all();
           
            $view->with('cate', $categories);
        });
    
        view()->composer('admin.menu_edit', function($view)
        {
            $categories = \App\Category::all();
            $view->with('cate', $categories);
        });
    
        view()->composer('menu.create', function($view)
        {
            $categories = \App\Category::with('children')->where('parent_id','=',0)->get();
            
            $categories2 = \App\Category::with('children')->where('parent_id','>=',0)->get();
            $view->with('cate1', $categories)->with('cate2', $categories2);

        });
    
        view()->composer('admin.pages', function($view)
        {
            
            $categories = \App\Category::with('children')->where('parent_id','>',0)->get();
            $imagesFromDB=\App\Image::all();
            $view->with('cate', $categories);
        });

       
        
       
    
        view()->composer('menu.delete', function($view)
        {
            $categories = \App\Category::with('children')->where('parent_id','>=','0')->get();
            $view->with('cate', $categories);
        });

        view()->composer('admin.edit', function($view)
        {
            $categories = \App\Category::all();
            $view->with('cate', $categories);
        });

       

        view()->composer('admin.delete-menu', function($view)
        {
            $categories = \App\Category::with('children')->where('parent_id','>=',0)->get();
            $view->with('cate', $categories);
        });

       




       
    
    
        view()->composer('admin.sub-menu', function($view)
        {
            $categories = \App\Menu::with('children')->where('parent_id','=',0)->get();
            $view->with('cate', $categories);
        });
    
    
        view()->composer('menu.create', function($view)
        {
            
            $categories = \App\Menu::all();
            $view->with('cate', $categories);
        });
    
      
    
    
    
        view()->composer('menu.delete', function($view)
        {
            $categories = \App\Menu::with('children')->where('parent_id','>=',0)->get();
            $view->with('cate', $categories);
        });



        view()->composer('admin.delete-menu', function($view)
        {
            $categories = \App\Menu::with('children')->where('parent_id','>=',0)->get();
            $view->with('cate', $categories);
        });

       



        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}