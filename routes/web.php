<?php

use App\Http\Controllers\CompagnieController;
use App\Models\Compagnie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Front
Route::get('/', function () {
    return view('home');
})->name('home');

//Back
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');

//Crud
    //index
Route::get('/admin/compagnie', [CompagnieController::class, 'index'])->name('comp.index');
    //show
Route::get('/admin/compagnie/{id}', [CompagnieController::class, 'show'])->name('comp.show');
    //delete
Route::delete('/admin/compagnie/{id}/delete', [CompagnieController::class, 'destroy'])->name('comp.delete');

    //create - store
Route::get('/admin/compagni/create', [CompagnieController::class, "create"])->name('comp.create');
Route::post('/admin/compagnie/store', [CompagnieController::class, "store"])->name('comp.store');

    //edit - update
Route::get('/admin/compagnie/{id}/edit', [CompagnieController::class, 'edit'])->name('comp.edit');
Route::put('/admin/compagnie/{id}/update', [CompagnieController::class, 'update'])->name('comp.update');
