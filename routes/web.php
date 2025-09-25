<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Sombra;
use App\Http\Controllers\C_SombraAdmin;
use App\Http\Controllers\Auth\LoginController;

//FITUR CLEAR
Route::get('/clear', function() {
    $exitcode = Artisan::call('cache:clear');
    $exitcode = Artisan::call('config:cache');
    $exitcode = Artisan::call('view:cache');
    return 'DONE';
});

// Search All Product
Route::get('searchp', [C_Sombra::class, 'searchp'])->name('searchp')->withoutMiddleware('auth');
Route::get('en/searchp', [C_Sombra::class, 'searchp_eng'])->name('searchp_eng')->withoutMiddleware('auth');

// Halaman Website Sombra | Indonesia
Route::get('/', [C_Sombra::class, 'sombra'])->name('sombra')->withoutMiddleware('auth');
Route::get('tentang', [C_Sombra::class, 'aboutus'])->name('aboutus')->withoutMiddleware('auth');
Route::get('produk', [C_Sombra::class, 'product'])->name('product')->withoutMiddleware('auth');
Route::get('produk/greenbean/{slug}', [C_Sombra::class, 'product_greenbean'])->name('product_greenbean')->withoutMiddleware('auth');
Route::get('produk/roastery/{slug}', [C_Sombra::class, 'product_roastery'])->name('product_roastery')->withoutMiddleware('auth');
Route::get('tokokopi', [C_Sombra::class, 'coffee'])->name('coffee')->withoutMiddleware('auth');
Route::get('artikel', [C_Sombra::class, 'article'])->name('article')->withoutMiddleware('auth');
Route::get('artikel/{slug}', [C_Sombra::class, 'article_detail'])->name('article_detail')->withoutMiddleware('auth');
Route::get('kontak', [C_Sombra::class, 'contactus'])->name('contactus')->withoutMiddleware('auth');
Route::get('faq', [C_Sombra::class, 'faq'])->name('faq')->withoutMiddleware('auth');


// Halaman Website Sombra | English
Route::get('en/sombra', [C_Sombra::class, 'sombra_en'])->name('sombra_en')->withoutMiddleware('auth');
Route::get('en/aboutus', [C_Sombra::class, 'aboutus_en'])->name('aboutus_en')->withoutMiddleware('auth');
Route::get('en/product', [C_Sombra::class, 'product_en'])->name('product_en')->withoutMiddleware('auth');
Route::get('en/product/greenbean/{slug}', [C_Sombra::class, 'product_greenbean_en'])->name('product_greenbean_en')->withoutMiddleware('auth');
Route::get('en/product/roastery/{slug}', [C_Sombra::class, 'product_roastery_en'])->name('product_roastery_en')->withoutMiddleware('auth');
Route::get('en/coffee', [C_Sombra::class, 'coffee_en'])->name('coffee_en')->withoutMiddleware('auth');
Route::get('en/article', [C_Sombra::class, 'article_en'])->name('article_en')->withoutMiddleware('auth');
Route::get('en/article/{slug}', [C_Sombra::class, 'article_detail_en'])->name('article_detail_en')->withoutMiddleware('auth');
Route::get('en/contactus', [C_Sombra::class, 'contactus_en'])->name('contactus_en')->withoutMiddleware('auth');
Route::get('en/faq', [C_Sombra::class, 'faq_en'])->name('faq_en')->withoutMiddleware('auth');

// SEND EMAIL
Route::post('sombra/email', [C_Sombra::class, 'sendcontactus'])->name('SendContactus')->withoutMiddleware('auth');


Auth::routes();

// ## ADMIN MAKNALA ______________#
Route::get('CMS', [LoginController::class, 'showLoginForm'])->name('showLoginForm');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('CMS/dashboard', [C_SombraAdmin::class, 'dashboard'])->name('dashboard')->middleware('auth');

// _____ ### SLIDERS ###
Route::get('CMS/sliders', [C_SombraAdmin::class, 'sliders'])->name('cmsSliders')->middleware('auth');
Route::get('CMS/sliders/add', [C_SombraAdmin::class, 'slidersadd'])->name('cmsSlidersAdd')->middleware('auth');
Route::post('CMS/sliders/store', [C_SombraAdmin::class, 'slidersstore'])->name('cmsSlidersStore')->middleware('auth');
Route::get('CMS/sliders/edit/{id}', [C_SombraAdmin::class, 'slidersedit'])->name('cmsSlidersEdit')->middleware('auth');
Route::post('CMS/sliders/update', [C_SombraAdmin::class, 'slidersupdate'])->name('cmsSlidersUpdate')->middleware('auth');
Route::get('CMS/sliders/delete/{id}', [C_SombraAdmin::class, 'slidersdelete'])->name('cmsSlidersDelete')->middleware('auth');

// _____ ### SLIDERS GREENBEAN ###
Route::get('CMS/sliders/greenbean', [C_SombraAdmin::class, 'slidersgreenbean'])->name('cmsSlidersGreenBean')->middleware('auth');
Route::get('CMS/sliders/greenbean/add', [C_SombraAdmin::class, 'slidersgreenbeanadd'])->name('cmsSlidersGreenBeanAdd')->middleware('auth');
Route::post('CMS/sliders/greenbean/store', [C_SombraAdmin::class, 'slidersgreenbeanstore'])->name('cmsSlidersGreenBeanStore')->middleware('auth');
Route::get('CMS/sliders/greenbean/edit/{id}', [C_SombraAdmin::class, 'slidersgreenbeanedit'])->name('cmsSlidersGreenBeanEdit')->middleware('auth');
Route::post('CMS/sliders/greenbean/update', [C_SombraAdmin::class, 'slidersgreenbeanupdate'])->name('cmsSlidersGreenBeanUpdate')->middleware('auth');
Route::get('CMS/sliders/greenbean/delete/{id}', [C_SombraAdmin::class, 'slidersgreenbeandelete'])->name('cmsSlidersGreenBeanDelete')->middleware('auth');

// _____ ### SLIDERS ROASTERY ###
Route::get('CMS/sliders/roastery', [C_SombraAdmin::class, 'slidersroastery'])->name('cmsSlidersRoastery')->middleware('auth');
Route::get('CMS/sliders/roastery/add', [C_SombraAdmin::class, 'slidersroasteryadd'])->name('cmsSlidersRoasteryAdd')->middleware('auth');
Route::post('CMS/sliders/roastery/store', [C_SombraAdmin::class, 'slidersroasterystore'])->name('cmsSlidersRoasteryStore')->middleware('auth');
Route::get('CMS/sliders/roastery/edit/{id}', [C_SombraAdmin::class, 'slidersroasteryedit'])->name('cmsSlidersRoasteryEdit')->middleware('auth');
Route::post('CMS/sliders/roastery/update', [C_SombraAdmin::class, 'slidersroasteryupdate'])->name('cmsSlidersRoasteryUpdate')->middleware('auth');
Route::get('CMS/sliders/roastery/delete/{id}', [C_SombraAdmin::class, 'slidersroasterydelete'])->name('cmsSlidersRoasteryDelete')->middleware('auth');

// _____ ### PRODUCT GREENBEAN ###
Route::get('CMS/product/greenbean', [C_SombraAdmin::class, 'productgreenbean'])->name('cmsProductG')->middleware('auth');
Route::get('CMS/product/greenbean/add', [C_SombraAdmin::class, 'productgreenbeanadd'])->name('cmsProductGAdd')->middleware('auth');
Route::post('CMS/product/greenbean/store', [C_SombraAdmin::class, 'productgreenbeanstore'])->name('cmsProductGStore')->middleware('auth');
Route::get('CMS/product/greenbean/edit/{id}', [C_SombraAdmin::class, 'productgreenbeanedit'])->name('cmsProductGEdit')->middleware('auth');
Route::post('CMS/product/greenbean/update', [C_SombraAdmin::class, 'productgreenbeanupdate'])->name('cmsProductGUpdate')->middleware('auth');
Route::get('CMS/product/greenbean/delete/{id}', [C_SombraAdmin::class, 'productgreenbeandelete'])->name('cmsProductGDelete')->middleware('auth');

// _____ ### DESC GREEENBEAN ###
Route::get('CMS/desc/greenbean', [C_SombraAdmin::class, 'descgreenbean'])->name('cmsDescGreenBean')->middleware('auth');
Route::get('CMS/desc/greenbean/add', [C_SombraAdmin::class, 'descgreenbeanadd'])->name('cmsDescGreenBeanAdd')->middleware('auth');
Route::post('CMS/desc/greenbean/store', [C_SombraAdmin::class, 'descgreenbeanstore'])->name('cmsDescGreenBeanStore')->middleware('auth');
Route::get('CMS/desc/greenbean/edit/{id}', [C_SombraAdmin::class, 'descgreenbeanedit'])->name('cmsDescGreenBeanEdit')->middleware('auth');
Route::post('CMS/desc/greenbean/update', [C_SombraAdmin::class, 'descgreenbeanupdate'])->name('cmsDescGreenBeanUpdate')->middleware('auth');
Route::get('CMS/desc/greenbean/delete/{id}', [C_SombraAdmin::class, 'descgreenbeandelete'])->name('cmsDescGreenBeanDelete')->middleware('auth');

// _____ ### PRODUCT ROASTERY ###
Route::get('CMS/product/roastery', [C_SombraAdmin::class, 'productroastery'])->name('cmsProductR')->middleware('auth');
Route::get('CMS/product/roastery/add', [C_SombraAdmin::class, 'productroasteryadd'])->name('cmsProductRAdd')->middleware('auth');
Route::post('CMS/product/roastery/store', [C_SombraAdmin::class, 'productroasterystore'])->name('cmsProductRStore')->middleware('auth');
Route::get('CMS/product/roastery/edit/{id}', [C_SombraAdmin::class, 'productroasteryedit'])->name('cmsProductREdit')->middleware('auth');
Route::post('CMS/product/roastery/update', [C_SombraAdmin::class, 'productroasteryupdate'])->name('cmsProductRUpdate')->middleware('auth');
Route::get('CMS/product/roastery/delete/{id}', [C_SombraAdmin::class, 'productroasterydelete'])->name('cmsProductRDelete')->middleware('auth');

// _____ ### DESC Roastery ###
Route::get('CMS/desc/roastery', [C_SombraAdmin::class, 'descroastery'])->name('cmsDescRoastery')->middleware('auth');
Route::get('CMS/desc/roastery/add', [C_SombraAdmin::class, 'descroasteryadd'])->name('cmsDescRoasteryAdd')->middleware('auth');
Route::post('CMS/desc/roastery/store', [C_SombraAdmin::class, 'descroasterystore'])->name('cmsDescRoasteryStore')->middleware('auth');
Route::get('CMS/desc/roastery/edit/{id}', [C_SombraAdmin::class, 'descroasteryedit'])->name('cmsDescRoasteryEdit')->middleware('auth');
Route::post('CMS/desc/roastery/update', [C_SombraAdmin::class, 'descroasteryupdate'])->name('cmsDescRoasteryUpdate')->middleware('auth');
Route::get('CMS/desc/roastery/delete/{id}', [C_SombraAdmin::class, 'descroasterydelete'])->name('cmsDescRoasteryDelete')->middleware('auth');

// _____ ### COFFEE SHOP ###
Route::get('CMS/coffeeshop', [C_SombraAdmin::class, 'coffeeshop'])->name('cmsCoffeeShop')->middleware('auth');
Route::get('CMS/coffeeshop/add', [C_SombraAdmin::class, 'coffeeshopadd'])->name('cmsCoffeeShopAdd')->middleware('auth');
Route::post('CMS/coffeeshop/store', [C_SombraAdmin::class, 'coffeeshopstore'])->name('cmsCoffeeShopStore')->middleware('auth');
Route::get('CMS/coffeeshop/edit/{id}', [C_SombraAdmin::class, 'coffeeshopedit'])->name('cmsCoffeeShopEdit')->middleware('auth');
Route::post('CMS/coffeeshop/update', [C_SombraAdmin::class, 'coffeeshopupdate'])->name('cmsCoffeeShopUpdate')->middleware('auth');
Route::get('CMS/coffeeshop/delete/{id}', [C_SombraAdmin::class, 'coffeeshopdelete'])->name('cmsCoffeeShopDelete')->middleware('auth');

// _____ ### COFFEE Outlet ###
Route::get('CMS/coffeeoutlet', [C_SombraAdmin::class, 'coffeeoutlet'])->name('cmsCoffeeOutlet')->middleware('auth');
Route::get('CMS/coffeeoutlet/add', [C_SombraAdmin::class, 'coffeeoutletadd'])->name('cmsCoffeeOutletAdd')->middleware('auth');
Route::post('CMS/coffeeoutlet/store', [C_SombraAdmin::class, 'coffeeoutletstore'])->name('cmsCoffeeOutletStore')->middleware('auth');
Route::get('CMS/coffeeoutlet/edit/{id}', [C_SombraAdmin::class, 'coffeeoutletedit'])->name('cmsCoffeeOutletEdit')->middleware('auth');
Route::post('CMS/coffeeoutlet/update', [C_SombraAdmin::class, 'coffeeoutletupdate'])->name('cmsCoffeeOutletUpdate')->middleware('auth');
Route::get('CMS/coffeeoutlet/delete/{id}', [C_SombraAdmin::class, 'coffeeoutletdelete'])->name('cmsCoffeeOutletDelete')->middleware('auth');

// _____ ### ARTICLE ###
Route::get('CMS/article', [C_SombraAdmin::class, 'article'])->name('cmsArticle')->middleware('auth');
Route::get('CMS/article/add', [C_SombraAdmin::class, 'articleadd'])->name('cmsArticleAdd')->middleware('auth');
Route::post('CMS/article/store', [C_SombraAdmin::class, 'articlestore'])->name('cmsArticleStore')->middleware('auth');
Route::get('CMS/article/edit/{id}', [C_SombraAdmin::class, 'articleedit'])->name('cmsArticleEdit')->middleware('auth');
Route::post('CMS/article/update', [C_SombraAdmin::class, 'articleupdate'])->name('cmsArticleUpdate')->middleware('auth');
Route::get('CMS/article/delete/{id}', [C_SombraAdmin::class, 'articledelete'])->name('cmsArticleDelete')->middleware('auth');

// _____ ### CONTACT ###
Route::get('CMS/contact', [C_SombraAdmin::class, 'contact'])->name('cmsContact')->middleware('auth');
Route::get('CMS/contact/delete/{id}', [C_SombraAdmin::class, 'contactdelete'])->name('cmsContactDelete')->middleware('auth');
