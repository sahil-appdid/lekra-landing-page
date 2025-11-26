<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('privacy-policy', [PageController::class, 'privacyPolicy']);

Route::get('terms-and-condition', [PageController::class, 'termsAndCondition']);
