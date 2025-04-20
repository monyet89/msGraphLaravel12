<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Laravel\Socialite\Facades\Socialite;



Route::get('/', [HomeController::class, 'welcome']);

Route::get('/signin', [AuthController::class, 'signin']);
Route::get('/callback', [AuthController::class, 'callback']);

Route::get('/signout', [AuthController::class, 'signout']);
Route::get('/calendar', [CalendarController::class, 'calendar']);
Route::get('/calendar/new', [CalendarController::class, 'getNewEventForm']);
Route::post('/calendar/new', [CalendarController::class, 'createNewEvent']);