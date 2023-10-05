<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoriesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/test', function () {
    return view('test');
});*/

Route::get('/test2', function () {
    return "<h1>bonsoir</h1>";
});

Route::get('/accueil/{x}',[HomeController::class,"accueil"])->name("home.accueil");
Route::get('/contact',[HomeController::class,"contact"])->name("home.contact");
Route::get('/{d}/{n}',[OrderController::class,"show"])
->name("order.show")
->where(["n"=>"[0-9]{1,8}","d"=>"[0-9]{2}-[0-9]{2}-[0-9]{4}"]);

Route::get('/form',[OrderController::class,"form"])
->name("order.form");

Route::post('/form',[OrderController::class,"post"])
->name("order.post");

//developpement site web statique
Route::get("/",[SiteController::class,"accueil"])->name("site.accueil");
Route::get("/about",[SiteController::class,"about"])->name("site.about");
Route::get("/produits",[SiteController::class,"produits"])->name("site.produits");
Route::get("/contact",[SiteController::class,"contact"])->name("site.contact");
Route::post("/contact/save",[SiteController::class,"save"])->name("site.save");

//routes du controller category
Route::resource('categories', CategoriesController::class);
Route::resource('products',ProductsController::class);
Route::get('/image', 'ProductsController@image');