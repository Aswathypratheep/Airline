<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stripecontroller;
use App\Http\Controllers\userController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [userController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/user/search', [UserController::class, 'usersearch'])->name('user.search');
Route::get('/booking/form/{id}', [userController::class, 'BookingForm'])->name('user.bookingform');
Route::get('/user/profile', [userController::class, 'profile'])->name('user.profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin/admin_dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.admin_dashboard');

Route::get('/admin/login_details', [AdminController::class, 'LoginDetails'])->name('admin.logindetails');
Route::get('/admin/manage_flights', [AdminController::class, 'manageflights'])->name('admin.manageflights');
Route::get('/admin/manage_tickets', [AdminController::class, 'managetickets'])->name('admin.managetickets');
Route::get('/admin/view_passengers', [AdminController::class, 'viewpassengers'])->name('admin.viewpassengers');
Route::get('/admin/placedetails', [AdminController::class, 'placedetails'])->name('admin.placedetails');
Route::get('/admin/view_payments', [AdminController::class, 'viewpayments'])->name('admin.viewpayments');


Route::post('/admin/add_flights', [AdminController::class, 'addflights'])->name('admin.addflights');
Route::delete('/admin/flight/{id}', [AdminController::class, 'deleteflight'])->name('admin.deleteflights');
Route::get('/admin/flightsform',function() {
    return view('admin.flights.flightsform'); 
})->name('admin.flightsform');


Route::post('/admin/addplace', [AdminController::class, 'addplace'])->name('admin.addplace');
Route::delete('/admin/places/{id}', [AdminController::class, 'deleteplace'])->name('admin.deleteplace');
Route::get('/admin/placeform',function() {
    return view('admin.places.placeform'); 
})->name('admin.placeform');


Route::post('/admin/add_tickets', [AdminController::class, 'addtickets'])->name('admin.addtickets');
Route::delete('/admin/tickets/{id}', [AdminController::class, 'deleteticket'])->name('admin.deleteticket');
Route::get('/admin/ticketsform', [AdminController::class, 'ticketsform'])->name('admin.ticketform');


Route::controller(stripecontroller::class)->group(function(){
    Route::post('stripe', 'stripePost')->name('checkout');
    Route::get('/success/{data}', 'success')->name('success');
});

Route::delete('/user/{id}', [userController::class, 'deletebooking'])->name('user.deletebooking');