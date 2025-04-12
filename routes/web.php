<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'home']);

Route::get('/{slug}', [WebsiteController::class, 'tour_details'])->name('tour.details');

Route::post('/inquiry-form/store', [FormController::class, 'enquiry_form'])->name('inquiryform.store');

Route::get('login-user-test', function () {
    Auth::loginUsingId(1);
});




Auth::routes();

Route::get('css/{page}.css', [\App\Http\Controllers\WebsiteController::class, 'page_css_marge'])->name('mix.css');
//Route::get('/all.css', [\App\Http\Controllers\WebsiteController::class , 'css_marge'])->name('mix.css');
Route::get('contact-us', [\App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact.index');
Route::post('contact-us', [\App\Http\Controllers\WebsiteController::class, 'contact_us'])->name('contact_us.store');

Route::get('sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('sitemap_pages.xml', [SitemapController::class, 'pages'])->name('sitemap.pages');
Route::get('sitemap_services.xml', [SitemapController::class, 'services'])->name('sitemap.services');
Route::get('sitemap_blogs.xml', [SitemapController::class, 'blog_posts'])->name('sitemap.blogs');

Route::get('/{page?}', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('single.segment');
Route::get('service/{service}', [\App\Http\Controllers\ServiceController::class, 'service_detail'])->name('single.service');
Route::get('service/{service}/{sub_service}', [\App\Http\Controllers\ServiceController::class, 'sub_service_detail'])->name('single.sub_service');
//Route::get('blogs', [\App\Http\Controllers\BlogController::class , 'blogs'])->name('blogs.index');
Route::get('blogs/{slug}', [\App\Http\Controllers\BlogController::class, 'blog_detail'])->name('blogs.detail');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth'], 'prefix' => 'super-admin'], function () {
    includeRouteFiles(__DIR__ . '/backend/');
});
