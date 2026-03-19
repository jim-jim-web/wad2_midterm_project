<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () {
    return redirect()->route('schedules.index');
});

Route::resource('schedules', ScheduleController::class);
