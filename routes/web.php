<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\PartnerController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\PricePlanController;
use App\Http\Controllers\admin\TeamMemberController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\WebsiteSettingController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\WebsiteController;

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


# // ============== Backend Routes ============== //


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [DashBoardController::class, 'index'])->name('admin.dashboard');


    # Dashboard Route

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    // Route::get('/category', [DashboardController::class, 'category'])->name('admin.category');

    # Category Route API
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    // Route::get('/category/create', [CategoryController::class, 'create']);

    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    // Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Single Data show in Category
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('admin.category.show');

    // resources
    // Route::resource('/categories', CategoryController::class);

    # Blog Route API
    // Route::resource('/blog', BlogController::class);

    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog.index');

    Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');

    Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');

    Route::get('/blog/edit/{blog:slug}', [BlogController::class, 'edit'])->name('admin.blog.edit');

    Route::put('/blog/update/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');

    Route::delete('/blog/Destroy/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    Route::get('/blog/show/{blog:slug}', [BlogController::class, 'show'])->name('admin.blog.show');


    # Service Route API
    route::resource('/service', ServiceController::class);

    // route::get('/service/show/{service}', [ServiceController::class, 'show'])->name('service.show');

    # Gallery Route API

    Route::resource('/gallery', GalleryController::class);

    # Testimonial Route API

    // Route::get('/testimonial', [App\Http\Controllers\TestimonialController::class, 'index'])->name('admin.testimonial');

    Route::resource('/testimonial', TestimonialController::class);

    # Price Plan Route API
    Route::resource('price-plan', PricePlanController::class);


    # Faq Route API
    // route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq.index');

    route::resource('faq', FaqController::class);

    # Partner Route API

    Route::resource('/partner', PartnerController::class);

    # Team Member Route API

    Route::resource('/team-member', TeamMemberController::class);
   
   
    # Contract US Route API

    Route::resource('/contact', ContactController::class);



    # Website Setting Route API

    // Route::resource('website-setting', WebsiteSettingController::class);

    //Website
    Route::get('setting/', [WebsiteSettingController::class, 'Setting'])->name('setting');

    Route::get('setting/website/', [WebsiteSettingController::class, 'website'])->name('setting.website');

    # Website Setting
    // Route::post('setting/website/update/{website}', [WebsiteSettingController::class, 'websiteUpdate'])->name('website.update');

    // Route::post('setting/color/update/{website}', [WebsiteSettingController::class, 'ColorUpdate'])->name('color.update');

    # Site Setting
    Route::post('site/setting/update/{website}', [WebsiteSettingController::class, 'SiteSetting'])->name('site.update');

    # Color Setting
    Route::post('color/setting/update/{website}', [WebsiteSettingController::class, 'ColorUpdate'])->name('color.update');

    # Image Setting
    Route::post('image/setting/update/{website}', [WebsiteSettingController::class, 'ImageSetting'])->name('image.update');

    # Seo Setting
    Route::post('seo/setting/update/{website}', [WebsiteSettingController::class, 'SeoSetting'])->name('seo.update');

    //Mail Setting
    Route::get('setting/mail-setting', [WebsiteSettingController::class, 'mailsetting'])->name('setting.mail-setting');


});


#  ============= Frontend Route =============

// Route::get('/', [FrontendController::class, 'index'])->name('website');

Route::group(['prefix' => 'website'], function () {

    Route::get('/', [FrontendController::class, 'index'])->name('website.home');

    Route::get('/about-us', [FrontendController::class, 'about'])->name('website.about-us');

    //Blog 
    Route::get('/blog', [FrontendController::class, 'blog'])->name('website.blog');
    Route::get('/blog/details/{blog:slug}', [FrontendController::class, 'blogDetails'])->name('website.blog.details');


    Route::get('/gallery', [FrontendController::class, 'gallery'])->name('website.gallery');

    //service
    Route::get('/service', [FrontendController::class, 'service'])->name('website.service');
    Route::get('/service/details/{service:slug}', [FrontendController::class, 'ServiceDetails'])->name('website.service.details');

    Route::get('/contact-us', [FrontendController::class, 'contact'])->name('website.contact-us');

    // Route::post('/send-message', [FrontendController::class, 'SendMessage'])->name('website.send-message');

    Route::get('/privacy-policy', [FrontendController::class, 'PrivacyPolicy'])->name('website.privacy-policy'); 

    Route::get('/terms-and-conditions', [FrontendController::class, 'TermsCondition'])->name('website.terms-and-conditions');
});

#  ============= Frontend Route =============
