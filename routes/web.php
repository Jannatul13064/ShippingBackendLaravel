<?php

use App\Models\BookedList;
use App\Models\Multimodal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



///Model Created Route End

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Admin Router -------------Start------------------------Admin Middleware

Route::group(['middleware' => 'is_admin'],function (){

    //Dashboard
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');

    //Booking create
    Route::get('/admin/booking-form', [App\Http\Controllers\Admin\BookingController::class, 'BookingForm'])->name('admin.booking-form');
    //Booking Create
    Route::post('/admin/booking-form', [App\Http\Controllers\Admin\BookingController::class, 'createBooking'])->name('admin.create-booking');
    //Create End

    //----view start
    //All booked
    Route::get('/admin/all-bookings', [App\Http\Controllers\Admin\BookingController::class, 'Index'])->name('admin.booked-lists');
    //view single booked-lists
    Route::get('/admin/bookings/{booking_id}', [App\Http\Controllers\Admin\BookingController::class, 'showBooking'])->name('admin.single-booked');
    //calculate Chargeable weight

    // Route::get('/admin/calculate-gwt-mwt', [App\Http\Controllers\Admin\AdminController::class, 'calculateChargeableWeight'])->name('admin.booked-lists');
    //----view end

    //update start
    Route::get('/admin/bookings/{id}/edit', [App\Http\Controllers\Admin\BookingController::class, 'showBookedId'])->name('admin.booked-edited');
    Route::put('/admin/booked-edit/{id}', [App\Http\Controllers\Admin\BookingController::class, 'editBooking'])->name('admin.edit-booking');

    //update end


    ///delete

    Route::delete('/admin/bookings/{id}/delete', [App\Http\Controllers\Admin\BookingController::class, 'delete'])->name('admin.delete-booking');




    // export and import lists

    Route::get('/admin/export-lists', [App\Http\Controllers\Admin\BookingController::class, 'exportList'])->name('admin.export-lists');
    Route::get('/admin/import-lists', [App\Http\Controllers\Admin\BookingController::class, 'importList'])->name('admin.import-lists');

    ///Model Created Route Start

    Route::get('admin/multimodal', function () {
        $booking = BookedList::find(1)->multimodal;
        return $booking;
    });

    Route::get('admin/booked-multimodal',function(){

        $booking_multimodal = Multimodal::find(1)->bookedlist;
        return $booking_multimodal;

    });





});


// Admin Router -----------------End--------------------Admin Middleware