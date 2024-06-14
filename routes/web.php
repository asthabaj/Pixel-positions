<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create'])-> middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])-> middleware('auth');


Route::get('/search', SearchController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/employer/profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::patch('/employer/update', [EmployerController::class, 'update'])->name('employer.update');
});

Route::get('/tags/{tag:name}', TagController::class);


Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisteredUserController::class,'create']);
    Route::post('/register',[RegisteredUserController::class,'store']);
    
    
    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');