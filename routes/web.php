<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

 Route::get('/' ,[MainController::class , 'index'])->name('index');
 Route::get('/contact' ,[MainController::class , 'contact'])->name('contact');
 Route::post('/contact' ,[MainController::class , 'contact'])->name('contact');
 Route::get('/resume' ,[MainController::class , 'resume'])->name('resume');
 Route::get('/projects' ,[MainController::class , 'projects'])->name('projects');
