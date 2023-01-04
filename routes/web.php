<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login','UserController@getLogin');
Route::post('/login','UserController@postLogin');
Route::get('/logout','UserController@getLogout');

Route::get('/','FrontController@home');

Route::get('/lien-he','FrontController@contact');
Route::post('/lien-he','FrontController@contact_post');

Route::post('/dang-ky-nhan-tin','FrontController@subEmail_post');


// router get từng trang theo danh mục

Route::get('{slug}.html','FrontController@slugHtml');
Route::get('{slug}','FrontController@slug');

// router tim kim theo keyword

Route::post('/search', 'FrontController@getNewsSearch');







//administrator
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
    // Welcome to admin 
    Route::get('/home','BackController@home');


    //Staff
    Route::group(['prefix' => 'staff'], function(){
        
        Route::get('profile','BackController@staff_profile');
        Route::post('profile','BackController@staff_profile_post');
        Route::get('list','BackController@staff_list');
        Route::get('add','BackController@staff_add');
        Route::post('add','BackController@staff_add_post');
        Route::get('edit/{id}','BackController@staff_edit');
        Route::post('edit/{id}','BackController@staff_edit_post');
        Route::get('delete/{id}','BackController@staff_delete');
        
        Route::post('filter','BackController@staff_filter');
    });

    // cau hinh he thong
    Route::get('/system','BackController@system');

    Route::post('/system','BackController@system_post');

    // quan ly trang
    Route::group(['prefix' => 'page'], function() {
        Route::get('list','BackController@page_list');
        Route::get('edit/{id}', 'BackController@page_edit');
        Route::post('edit/{id}','BackController@page_edit_post');
    });

    //quan ly mang xa hoi 
    Route::group(['prefix' => 'social'], function() {
        Route::get('list','BackController@social_list');
        Route::get('edit/{id}', 'BackController@social_edit');
        Route::post('edit/{id}','BackController@social_edit_post');
    });

     //quan ly tin cap nhat
     Route::group(['prefix' => 'newsletter'], function() {
        Route::get('list','BackController@newsletter_list');
        Route::get('edit/{id}', 'BackController@newsletter_edit');
        Route::post('edit/{id}','BackController@newsletter_edit_post');

        Route::get('details/{id}', 'BackController@newsletter_details');

        Route::get('delete/{id}','BackController@newsletter_delete');
    });

    // quản lý liên hện - contact management ---------------
     Route::group(['prefix' => 'contact'], function() {
        Route::get('list','BackController@contact_list');
        Route::get('edit/{id}', 'BackController@contact_edit');
        Route::post('edit/{id}','BackController@contact_edit_post');

        Route::get('details/{id}', 'BackController@contact_details');

        Route::get('delete/{id}','BackController@contact_delete');
    });

    //quản lý danh mục - news category ---------------
    Route::group(['prefix' => 'news_cat'], function() {
        Route::get('list','BackController@news_cat_list');
        Route::get('edit/{RowID}', 'BackController@news_cat_getedit');
        Route::post('edit/{RowID}','BackController@news_cat_edit');

        
    });

    //quản lý danh mục - news category ---------------

    //Quản lý tin tức -- new management ------  


    Route::group(['prefix' => 'news'], function() {
        Route::get('list','BackController@news_list');
        Route::get('add', 'BackController@news_getadd');
        Route::post('add','BackController@news_add');

        Route::get('edit/{RowID}','BackController@news_getedit');
        Route::post('edit/{RowID}','BackController@news_edit');

        Route::get('delete/{RowID}','BackController@news_delete');

        Route::post('sort/{id}', 'BackController@news_cat_update_sort');

        Route::post('search', 'BackController@news_search');

        Route::get('moresearch','BackController@more_search');

        Route::post('moresearch', 'BackController@more_searchPost');
    });


    //Quản lý tin tức -- new management ------




});

