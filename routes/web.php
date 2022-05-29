<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;

Route::get('/', function () {
    return view('frontend.index');
});

//admin all route
Route::controller(AdminController::class)->group(function (){
Route::get('/admin/logout', 'destroy')->name('admin.logout');
Route::get('/admin/profile', 'Profile')->name('admin.profile');
Route::get('/admin/edit', 'EditProfile')->name('edit.profile');
Route::post('/store/profile', 'StoreProfile')->name('store.profile');
Route::get('/change/password', 'ChangePassword')->name('change.password');
Route::post('/update/password', 'UpdatePassword')->name('update.password');


});



//Homeslide  all route
Route::controller(HomeSliderController::class)->group(function (){
Route::get('/home/slide', 'HomeSlide')->name('home.slide');
Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
  
});
    
 // About Page All Route 
Route::controller(AboutController::class)->group(function () {
Route::get('/about/page', 'AboutPage')->name('about.page');
Route::post('/update/about', 'UpdateAbout')->name('update.about');
Route::get('/about', 'HomeAbout')->name('home.about');

Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');

Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.images');
Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
Route::get('/delete/multi/image/{id}', 'deleteMultiImage')->name('delete.multi.images');
});





Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
