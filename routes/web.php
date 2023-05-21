<?php

use Illuminate\Support\Facades\Artisan;
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



// Admin

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('admin/login','App\Http\Controllers\Admin\UsersController@showloginAdmin')->name('admin.showlogin');
Route::post('admin/login','App\Http\Controllers\Admin\UsersController@loginAdmin')->name('admin.login');
Route::get('admin/logout','App\Http\Controllers\Admin\UsersController@logoutAdmin')->name('admin.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['check.admin.user'] ], function () {
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'App\Http\Controllers\Admin\PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'App\Http\Controllers\Admin\PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'App\Http\Controllers\Admin\RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'App\Http\Controllers\Admin\RolesController');

    // Users
    Route::delete('users/destroy', 'App\Http\Controllers\Admin\UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'App\Http\Controllers\Admin\UsersController');

    // Hotels
    Route::delete('hotels/destroy', 'App\Http\Controllers\Admin\HotelsController@massDestroy')->name('hotels.massDestroy');
    Route::resource('hotels', 'App\Http\Controllers\Admin\HotelsController');

    // Room Types
    Route::delete('room-types/destroy', 'App\Http\Controllers\Admin\RoomTypesController@massDestroy')->name('room-types.massDestroy');
    Route::resource('room-types', 'App\Http\Controllers\Admin\RoomTypesController');

    // Rooms
    Route::delete('rooms/destroy', 'App\Http\Controllers\Admin\RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::resource('rooms', 'App\Http\Controllers\Admin\RoomsController');
    Route::get('changeStatus','App\Http\Controllers\Admin\RoomsController@changeStatus')->name('changeStatus');

    // Bookings
    Route::put('bookings/update-status/{id}','App\Http\Controllers\Admin\BookingsController@bookingStatus')->name('update.status');
    Route::put('bookings/cancel-booking/{id}','App\Http\Controllers\Admin\BookingsController@cancelBooking')->name('cancel.booking');
    Route::put('bookings/complete-booking/{id}','App\Http\Controllers\Admin\BookingsController@completeBooking')->name('complete.booking');
    Route::delete('bookings/destroy', 'App\Http\Controllers\Admin\BookingsController@massDestroy')->name('bookings.massDestroy');
    Route::resource('bookings', 'App\Http\Controllers\Admin\BookingsController');
    

    // Coupons
    Route::delete('coupons/destroy', 'App\Http\Controllers\Admin\CouponsController@massDestroy')->name('coupons.massDestroy');
    Route::resource('coupons', 'App\Http\Controllers\Admin\CouponsController');
    

    // Image
    Route::delete('images/destroy', 'App\Http\Controllers\Admin\ImagesController@massDestroy')->name('images.massDestroy');
    Route::resource('images', 'App\Http\Controllers\Admin\ImagesController');

    // Image
    Route::resource('advise', 'App\Http\Controllers\Admin\AdviseController');

    
    Route::get('mail','App\Http\Controllers\Admin\BookingsController@sendmail')->name('mail');
    
});



// login home
Route::get('/login','App\Http\Controllers\Home\UserController@showlogin')->name('home.showlogin');
Route::post('/login','App\Http\Controllers\Home\UserController@login')->name('home.login');
Route::post('/loginthanhtoan','App\Http\Controllers\Home\UserController@loginthanhtoan')->name('thanhtoan.login');
//logout home
Route::get('/logout','App\Http\Controllers\Home\UserController@logout')->name('home.logout');
//register home
Route::post('/register','App\Http\Controllers\Home\UserController@register')->name('home.register');


//home
Route::get('/','App\Http\Controllers\HomeController@index')->name('home.index');
Route::post('/advise','App\Http\Controllers\HomeController@storeAdvise')->name('Store.advise');



Route::any('/search','App\Http\Controllers\HomeController@searchhotel')->name('search.hotel');

Route::any('/deletefilter/{id}','App\Http\Controllers\HomeController@deletefilter')->name('deletefilter');

Route::any('/searchhotelbycheckbox/{id}','App\Http\Controllers\HomeController@searchhotelbycheckbox')->name('search.searchhotelbycheckbox');
Route::get('/city/{id}','App\Http\Controllers\HomeController@searchwithcity')->name('searchwithcity');

Route::get('/hotel/{id}','App\Http\Controllers\HotelController@show')->name('hotel.detail');

Route::get('/dat-phong','App\Http\Controllers\HomeController@booking')->name('booking');
Route::get('/thanh-toan','App\Http\Controllers\HomeController@thanhtoan')->name('thanhtoan');

//check mã đơn hàng
Route::get('/kiem-tra-don-hang','App\Http\Controllers\BookingController@checkticked')->name('checkticked');
Route::post('/kiem-tra-don-hang','App\Http\Controllers\BookingController@checkorderstt')->name('checkorderstt');
// đơn hàng của bạn
Route::get('/don-hang-cua-ban','App\Http\Controllers\BookingController@yourorders')->name('yourorders');
//thêm khách sạn yêu thích
Route::get('/addfavorite/{id}','App\Http\Controllers\HomeController@addfavorite')->name('addfavorite');
//xem danh sách khách sạn yêu thích
Route::get('/khach-san-yeu-thich','App\Http\Controllers\HotelController@favorite')->name('favorite');


Route::get('/room/{id}/booking','App\Http\Controllers\BookingController@show')->name('home.booking');
//comments
Route::post('/hotel/{id}/comments','App\Http\Controllers\HotelRateController@store')->name('hotel.comments');

// user
Route::get('tai-khoan','App\Http\Controllers\Home\UserController@showacc')->name('user.acc');
Route::post('tai-khoan','App\Http\Controllers\Home\UserController@update')->name('update.user');

//callback mxh
Route::get('/auth/redirect/{provider}', 'App\Http\Controllers\SocialController@redirect');
 Route::get('/callback/{provider}', 'App\Http\Controllers\SocialController@callback');


Route::get('/clear-cache-all', function() {
    Artisan::call('cache:clear');
    return redirect()->back();
});

Route::get('/autocomplete-search', 'App\Http\Controllers\TypeaheadController@autocompleteSearch');

Route::get('/test', 'App\Http\Controllers\HomeController@test');