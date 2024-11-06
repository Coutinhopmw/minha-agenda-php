<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/create',[PostController::class,'create']);
Route::get('/', function () { return view('/layout/index');});
Route::get('/cadastar_atividade', function(){ return view('/layout/cadastar_atividade');});


