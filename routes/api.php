<?php

use App\Http\Controllers\FakerData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/faker', [FakerData::class, 'api']);
Route::get('/faker/data', [FakerData::class, 'data']);
