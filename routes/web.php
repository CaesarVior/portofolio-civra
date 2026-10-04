<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = \App\Models\Project::orderBy('sort_order')->orderBy('id')->get();

    return view('portfolio', ['projects' => $projects]);
})->name('home');

Route::prefix('admin/projects')->group(function () {
    Route::get('/', [App\Http\Controllers\ProjectController::class, 'admin'])->name('projects.admin');
    Route::post('/login', [App\Http\Controllers\ProjectController::class, 'login'])->name('projects.login');
    Route::post('/store', [App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
    Route::put('/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::post('/logout', [App\Http\Controllers\ProjectController::class, 'logout'])->name('projects.logout');
});
