<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('student.dashboard');
})->name('student.home');

Route::get('/explore', function () {
    return view('student.explore');
})->name('student.explore');

Route::get('/sessions', function () {
    return view('student.sessions');
})->name('student.sessions');

Route::get('/massage', function () {
    return view('student.massage');
})->name('student.massage');

Route::get('/profile', function () {
    return view('student.profile');
})->name('student.profile');

Route::get('/tutor/home', function () {
    return view('tutor.dashboard');
})->name('tutor.home');

Route::get('/tutor/sessions', function () {
    return view('tutor.sessions');
})->name('tutor.sessions');

Route::get('/tutor/earnings', function () {
    return view('tutor.earnings');
})->name('tutor.earnings');

Route::get('/tutor/profile', function () {
    return view('tutor.profile');
})->name('tutor.profile');
