<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ScheduleController@index')->name('home');
Route::get('/patients', 'PatientController@index')->name('patients.list');
