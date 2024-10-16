<?php

use Illuminate\Support\Facades\Route;

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
    $testText = 'Test 123456';

    return view('welcome', [
        'test' => $testText
    ]);
})->name('index');


Route::get('/about', function () {
    $testTest2 = '456789';

    return view('pages.about', compact('testTest2'));
})->name('about');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

