<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('deactivate' , [PagesController::class , 'deactivate'])->name('pages.deactivate');

Route::get('get/zone/{id}', [PagesController::class , 'get_zone']);
Route::get('get/city/{id}', [PagesController::class , 'get_city']);

Route::get('/' , [PagesController::class, 'index'])->name('pages.index');
Route::get('contact' , [PagesController::class, 'contact'])->name('pages.contact');
Route::get('agency-register' , [PagesController::class, 'agency_register'])->name('pages.agency_register');
Route::get('estates' , [PagesController::class , 'estate'])->name('pages.estate');
Route::get('articles' , [PagesController::class , 'articles'])->name('pages.articles');
Route::post('store/agency' , [AgencyController::class , 'store'])->name('store.agency');
Route::put('update/{agency}/agency' , [AgencyController::class , 'update'])->name('update.agency');

Route::get('search-estate' , [PagesController::class , 'search_estate'])->name('pages.search_estate');

Route::get('estate/{estateCode}' , [PagesController::class , 'single_estate'])->name('pages.single_estate');
Route::get('articles/{articleSlug}' , [PagesController::class , 'single_article'])->name('pages.single_article');

Route::prefix('admin')->middleware(['auth' , 'admin_mid'])->group(function (){
   Route::get('home' , [AdminController::class , 'home'])->name('admin.home');

    //    Article-Category
    Route::get('category' , [AdminController::class , 'article_category'])->name('admin.article.category');
    Route::post('store/category' , [ArticleController::class , 'store_category'])->name('category.store');
    Route::put('update/{category}/category' , [ArticleController::class , 'update_category'])->name('category.update');
    Route::delete('delete/{category}/category' , [ArticleController::class , 'delete_category'])->name('category.delete');

    //    Article
    Route::get('articles' , [AdminController::class , 'articles'])->name('admin.article');
    Route::get('add/article' , [ArticleController::class , 'add'])->name('article.add');
    Route::get('edit/{article}/article' , [ArticleController::class , 'edit'])->name('article.edit');
    Route::post('store/article' , [ArticleController::class , 'store'])->name('article.store');
    Route::put('update/{article}/article' , [ArticleController::class , 'update'])->name('article.update');
    Route::delete('delete/{article}/article' , [ArticleController::class , 'delete'])->name('article.delete');


//   Agency
    Route::get('agencies' , [AdminController::class , 'agency'])->name('admin.agency');
    Route::get('agency/{agency}/show' , [AgencyController::class , 'agency_show'])->name('admin.agency.show');
    Route::get('agency/{agency}/verify' , [AgencyController::class , 'agency_verify'])->name('admin.agency.verify');
    Route::get('agency/{agency}/mark' , [AgencyController::class , 'agency_mark'])->name('admin.agency.mark');

//    Types
    Route::get('/types' , [AdminController::class , 'types'])->name('admin.types');
    Route::post('store/type' , [AdminController::class , 'store_type'])->name('admin.store_type');
    Route::put('update/{type}/type' , [AdminController::class , 'update_type'])->name('admin.update_type');
    Route::delete('delete/{type}/type' , [AdminController::class , 'delete_type'])->name('admin.delete_type');

});



Route::prefix('agency')->middleware(['auth' , 'agency_mid'])->group(function (){
   Route::get('home' , [AgencyController::class , 'home'])->name('agency.home');

//   Real estate consultant
    Route::get('consultants' , [AgencyController::class , 'consultant'])->name('agency.consultant');
    Route::post('store/agency/{agency}/consultant' , [AgencyController::class , 'store_consultant'])->name('store.agency.consultant');
    Route::put('update/consultant/{consultant}/info' , [AgencyController::class , 'update_consultant'])->name('update.agency.consultant');
    Route::get('consultant/{consultant}/mark' , [AgencyController::class , 'mark_consultant'])->name('agency.consultant.mark');

//    estate
    Route::get('/estates' , [AgencyController::class , 'estates'])->name('agency.estates');
    Route::get('/new/estate' , [AgencyController::class , 'new_estate'])->name('agency.new_estate');
    Route::post('store/{agency}/estate' , [AgencyController::class , 'store_estate'])->name('store.agency.estate');
    Route::post('/store/image/{estate}/estate' , [AgencyController::class , 'store_image_estate'])->name('agency.store_image_estate');
    Route::get('/pay/agency/{estate}/estate' , [AgencyController::class , 'pay_estate'])->name('agency.pay_estate');
    Route::put('/pay/agency/{estate}/estate/update' , [AgencyController::class , 'pay_estate_update'])->name('agency.pay_estate.update');

//    Request
    Route::get('/estate/{estate}/request' , [AgencyController::class , 'estate_request'])->name('agency.estate_request');


});

Route::prefix('consultant')->middleware(['auth' , 'consultant_mid'])->group(function (){
    Route::get('home' , [ConsultantController::class , 'home'])->name('consultant.home');

    Route::get('/estate/{estate}/request' , [ConsultantController::class , 'estate_request'])->name('consultant.estate_request');
    Route::get('/estate/request/{request}/mark' , [ConsultantController::class , 'mark_status'])->name('consultant.mark_status');
    Route::put('/estate/request/{userRequest}/replay' , [ConsultantController::class , 'replay_request'])->name('consultant.replay_request');
});


Route::prefix('user')->middleware(['auth' , 'user_mid'])->group(function (){
    Route::get('home' , [UserController::class , 'home'])->name('user.home');

    Route::post('store/estate/{estate}/request' , [UserController::class , 'store_request'])->name('user.store_request');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
