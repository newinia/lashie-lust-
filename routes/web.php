<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Notifications
Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

// Services
Route::get('/services', function () {
    return view('services');
})->name('services');
// routes/web.php

// Route untuk menampilkan form tambah layanan
Route::get('/services/create', function () {
    return view('service_form');
})->name('services.create');

// Route untuk menampilkan form edit layanan (membutuhkan ID)
Route::get('/services/{id}/edit', function ($id) {
    // Di sini Anda akan mengambil data layanan berdasarkan $id dan mengirimkannya ke view
    return view('service_form', ['service_id' => $id]);
})->name('services.edit');

// Booking
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

// Review
Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');