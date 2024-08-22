<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//ojo

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');


//about
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');


//portfolio
Route::get('/portfolio', [App\Http\Controllers\PageController::class, 'portfolio'])->name('portfolio');


//services
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/servicedetail/{slug}', [App\Http\Controllers\PageController::class, 'servicedetail'])->name('servicedetail');

//news
Route::get('/news', [App\Http\Controllers\PageController::class, 'news'])->name('news');
Route::get('/newdetail/{slug}', [App\Http\Controllers\PageController::class, 'newdetail'])->name('newdetail');


//contact
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');


//faq
Route::get('/faq', [App\Http\Controllers\PageController::class, 'faq'])->name('faq');




//admin
Route::get('/ojoadmin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('adminlogin');
Route::post('/ojoadmin/login', [App\Http\Controllers\AdminController::class, 'loginPost'])->name('adminlogin.post');
//Route::get('/ojoadmin/register', [App\Http\Controllers\AdminController::class, 'register' ])->name('adminregister');
//Route::post('/ojoadmin/register', [App\Http\Controllers\AdminController::class, 'registerPost'])->name('adminregister.post');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/ojoadmin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('adminindex');
    Route::get('/ojoadmin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('adminprofile');
    Route::get('/ojoadmin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');

    //clients
    Route::get('/ojoadmin/clients', [App\Http\Controllers\BrandController::class, 'index'])->name('adminclients');
    Route::get('/ojoadmin/clientupload', [App\Http\Controllers\BrandController::class, 'create'])->name('adminclientupload');
    Route::post('/ojoadmin/clientcreate', [App\Http\Controllers\BrandController::class, 'store'])->name('adminclientcreate');
    Route::get('/ojoadmin/clientedit/{id}', [App\Http\Controllers\BrandController::class, 'edit'])->name('adminclientedit');
    Route::put('/ojoadmin/clientupdate/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('adminclientupdate');
    Route::delete('/ojoadmin/clientdelete/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('adminclientdelete');

    //portfolio
    Route::get('/ojoadmin/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('adminportfolio');
    Route::get('/ojoadmin/portfolioupload', [App\Http\Controllers\PortfolioController::class, 'create'])->name('adminportfolioupload');
    Route::post('/ojoadmin/portfoliocreate', [App\Http\Controllers\PortfolioController::class, 'store'])->name('adminportfoliocreate');
    Route::get('/ojoadmin/portfolioedit/{id}', [App\Http\Controllers\PortfolioController::class, 'edit'])->name('adminportfolioedit');
    Route::put('/ojoadmin/portfolioupdate/{id}', [App\Http\Controllers\PortfolioController::class, 'update'])->name('adminportfolioupdate');
    Route::delete('/ojoadmin/portfoliodelete/{id}', [App\Http\Controllers\PortfolioController::class, 'destroy'])->name('adminportfoliodelete');

    //services
    Route::get('/ojoadmin/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('adminservices');
    Route::get('/ojoadmin/serviceupload', [App\Http\Controllers\ServiceController::class, 'create'])->name('adminserviceupload');
    Route::post('/ojoadmin/servicecreate', [App\Http\Controllers\ServiceController::class, 'store'])->name('adminservicecreate');
    Route::get('/ojoadmin/servicedetail/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('adminservicedetail');
    Route::get('/ojoadmin/serviceedit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('adminserviceedit');
    Route::put('/ojoadmin/serviceupdate/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('adminserviceupdate');
    Route::delete('/ojoadmin/servicedelate/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('adminservicedelete');



    //news
    Route::get('/ojoadmin/news', [App\Http\Controllers\NewController::class, 'index'])->name('adminnews');
    Route::get('/ojoadmin/newupload', [App\Http\Controllers\NewController::class, 'create'])->name('adminnewupload');
    Route::post('/ojoadmin/newcreate', [App\Http\Controllers\NewController::class, 'store'])->name('adminnewcreate');
    Route::get('/ojoadmin/newdetail/{slug}', [App\Http\Controllers\NewController::class, 'show'])->name('adminnewdetail');
    Route::get('/ojoadmin/newedit/{id}', [App\Http\Controllers\NewController::class, 'edit'])->name('adminnewedit');
    Route::put('/ojoadmin/newupdate/{id}', [App\Http\Controllers\NewController::class, 'update'])->name('adminnewupdate');
    Route::delete('/ojoadmin/newdelete/{id}', [App\Http\Controllers\NewController::class, 'destroy'])->name('adminnewdelete');


});





