<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Song\SongController;
use App\Http\Controllers\playlist\PlaylistController;
use App\Http\Controllers\Category\CategoryController;

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
####################song#######################

Route::get('/addSongPage',[SongController::class,'addSongPage']);
Route::post('/addSong',[SongController::class,'addNewSong'])->name('addSong');

########################Playlist#########################

Route::get('/addPlaylistPage',[PlaylistController::class,'addPlaylistPage']);
Route::post('/addPlaylist',[PlaylistController::class,'addPlaylist'])->name('addPlaylist');
Route::get('/testAPI/{id}',[PlaylistController::class,'testAPI'])->name('testAPI');



########Category Routes######################
Route::get('/addCategoryPage',[CategoryController::class,'createNewCategoryPage']);
Route::post('/addCategory',[CategoryController::class,'createNewCategory'])->name('addCategory');

