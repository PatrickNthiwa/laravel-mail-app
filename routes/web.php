<?php

use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-mail', function () {

    $details = [
        'title' => 'Mail from PrimeSoftwareLimited.com',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('pwnthiwa@gmail.com')->send(new \App\Mail\myTestMail($details));

    dd("Email is Sent.");
});
