<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ScheduleController@index')->name('home');
Route::post('/schedule/store', 'ScheduleController@store')->name('schedule.store');
Route::get('/patients', 'PatientController@index')->name('patients.list');
