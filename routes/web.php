<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/home', function () {
    $users = User::all();
    return view('pages.home', ['users' => $users]);
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

