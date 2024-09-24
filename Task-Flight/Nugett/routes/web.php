<?php
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
\Illuminate\Support\Facades\Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/flights/search', [FlightController::class, 'showSearchForm'])->name('flights.search.form');
Route::get('/flights/search/results', [FlightController::class, 'searchFlights'])->name('flights.search');
Route::get('/flights/book/{id}', [FlightController::class, 'showBookingForm'])->name('flights.book.form');
Route::post('/flights/book/{id}', [FlightController::class, 'bookFlight'])->name('flights.book');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('flights', FlightController::class);

// Route::get('/flights/create', [FlightController::class, 'create'])->name('flights.create');
// Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');
// Route::get('/flights/edit', [FlightController::class, 'edit'])->name('flights.edit');
// Route::get('/flights/update', [FlightController::class, 'update'])->name('flights.update');
//Route::post('/flights', [FlightController::class, 'store'])->name('flights.store');
// Route::get('/flights/search', [FlightController::class, 'showSearchForm'])->name('flights.search');
// Route::post('/flights/search', [FlightController::class, 'searchFlights'])->name('flights.search.submit');
// Route::get('/flights/{flight}/book', [FlightController::class, 'create'])->name('flights.book');
// Route::post('/flights/{flight}/book', [FlightController::class, 'store'])->name('flights.book.store');
