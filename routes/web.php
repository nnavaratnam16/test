<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('homepage');
});

Route::get('/librarypage', function () {
    return view('librarypage');
});

Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/playerpage', function () {
    return view('playerpage');
});

Route::get('user', function() {
    return view('user');
});

Route::get('firstpage', function() {
    return view('firstpage');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
