<?php

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

    Route::get('/',['as'=>'/','uses'=>'BlogController@index']);
    Route::get('blog',['as'=>'blog.home','uses'=>'BlogController@index']);
    Route::get('blog/{id}/{title}',['as'=>'blog-detail','uses'=>'BlogController@blogDetail']);
    Auth::routes();
/////////Authenticate Routes .////////
    Route::group(['middleware' =>'auth'], function(){
    Route::get('addPost',['as'=>'addPost','uses'=>'PostController@viewPostAddCategory']);
    Route::post('save_post',['as'=>'save_post','uses'=>'PostController@save_post']);
    Route::get('dashboard', array('as' => 'dashboard', function(){
        return view('layouts.dashboard.dashboard');
    }));
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('bankdetail',['as'=>'bankdetail','uses'=>'BankDetailController@index']);
    Route::Post('bankdetail',['as'=>'bankdetail','uses'=>'BankDetailController@insertbankdetail']);

    });
    /////Authenticate  +  admin routes //////
    Route::group(['middleware' =>'admin','auth'], function(){
    Route::get('addCoupon',['as'=>'addCoupon','uses'=>'CouponController@addCouponPage']);
    Route::post('save_coupon',['as'=>'save_coupon','uses'=>'CouponController@save_coupon']);
    Route::get('manageCoupon',['as'=>'manageCoupon','uses'=>'CouponController@viewAddCoupon']);
    Route::get('manageUser',['as'=>'manageUser','uses'=>'UserController@viewAddUser']);
    Route::post('/delete/user', 'UserController@delete_user');
    Route::post('/dashboard/orderlist', 'MenuItemController@orderList');
    Route::get('manageUser',['as'=>'manageUser','uses'=>'UserController@viewAddUser']);
    Route::post('add_category',['as'=>'add_category','uses'=>'CategoryController@add_category']);
    Route::get('addCategory',['as'=>'addCategory','uses'=>'CategoryController@viewAddCategory']);
    Route::post('insertMenuitems',['as'=>'insertMenuitems','uses'=>'CategoryController@insertMenuitems']);
    Route::get('menuItems',['as'=>'menuItems','uses'=>'MenuItemController@viewMenuItem']);
    Route::post('add_menu',['as'=>'add_menu','uses'=>'MenuController@add_menu']);
    Route::get('addMenu',['as'=>'addMenu','uses'=>'MenuController@viewAddMenu']);
    Route::get('addCategories',['as'=>'addCategories','uses'=>'MenuController@viewCategoryAddMenu']);
    Route::get('manageComments',['as'=>'manageComments','uses'=>'PostCommentController@index']);
    Route::get('settings',['as'=>'settings','uses'=>'SettingController@index']);
    Route::post('settings',['as'=>'settings','uses'=>'SettingController@settings']);
    Route::get('managePost',['as'=>'managePost','uses'=>'PostController@managePost']);
    Route::get('bankdetail',['as'=>'bankdetail','uses'=>'BankDetailController@index']);
    Route::Post('bankdetail',['as'=>'bankdetail','uses'=>'BankDetailController@insertbankdetail']);
    });

