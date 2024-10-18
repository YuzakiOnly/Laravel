<?php

use App\Http\Controllers\PersonalInformationController;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/personal-information', PersonalInformationController::class);
