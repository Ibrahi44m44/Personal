<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

 Route::get('/' ,[MainController::class , 'index'])->name('index');
 Route::get('/contact' ,[MainController::class , 'contact'])->name('contact');
 Route::post('/contact' ,[MainController::class , 'contact'])->name('contact');
 Route::get('/resume' ,[MainController::class , 'resume'])->name('resume');
 Route::get('/projects' ,[MainController::class , 'projects'])->name('projects');




Route::get('user/{name}/{age}' , [MainController::class,'user']);





Route::prefix('/blog')->name('blog.')->group(function(){
    Route::get('/' , [BlogController::class , 'index'])->name('index');
    Route::get('/contact' , [BlogController::class , 'contact'])->name('contact');
    Route::get('/post' , [BlogController::class , 'post'])->name('post');
    Route::get('/about' , [BlogController::class , 'about'])->name('about');
});
