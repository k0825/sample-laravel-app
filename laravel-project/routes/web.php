<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\S3Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', [S3Controller::class, 'upload'])->name('upload');
Route::get('/send-email', [MailController::class, 'send']);