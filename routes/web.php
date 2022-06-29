<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CursoController;
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

Route::get('/',CursoController::class);

Route::controller(CursoController::class)->group( function(){

    
route::get("curso",'index')->name('curso.index');
route::get("curso/create/",'create')->name('curso.create');
route::get("curso/{id}",'show')->name('curso.show');
route::post("cursonew",'cursopost')->name('curso.store');
route::put("curso.update/{curso}/",'update')->name('curso.update');

});


route::get('cursos/{id}/edit',[CursoController::class,'edit'])->name('cursos.edit');

route::delete('cursos/{id}',[CursoController::class,'delete'])->name('curso.destroy');

//Route::resource('curso',CursoController::class)->parameters(['curso'=>'cursos'])->names('cursos');