<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
Route::get('/idea/show/{idea}', [IdeaController::class, 'show'])->name('idea.show');
//Route::Post('/idea/destroy/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');
Route::delete('/idea/delete/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');