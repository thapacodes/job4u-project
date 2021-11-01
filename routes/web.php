<?php

use Illuminate\Support\Facades\Route;

Route::get('/forgot-password', function () { return view('pages.auth.forgot-password'); })->name('forgot-password');
Route::get('/reset-password', function () { return view('pages.auth.reset-password'); })->name('reset-password');
Route::get('/', function () { return view('pages.web.home'); })->name('home');

Route::get('/login', function () { return view('pages.auth.login'); })->name('login');
Route::get('/register', function () { return view('pages.auth.register'); })->name('register');
Route::get('/change-password', function () { return view('pages.admin.change-password'); });
Route::get('/dashboard', function () { return view('pages.admin.dashboard'); })->middleware(['auth', 'verified']);
Route::get('/dashboard/{pagename}', function () { return view('pages.admin.page'); })->middleware('auth');
Route::get('/dashboard/{pagename}/{id}', function () { return view('pages.admin.edit'); })->middleware('auth');
Route::get('/{pagename}', function () { return view('pages.web.page'); });
Route::get('/search/{searchSlug}', function () { return view('pages.web.search'); });
Route::get('/{pagename}/{pageSlug}', function () { return view('pages.web.post'); });
