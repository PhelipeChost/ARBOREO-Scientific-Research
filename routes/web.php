<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//   return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/login', [App\Http\Controllers\AuthenticateController::class, 'Authenticate']);
Route::get('/start-registration', [App\Http\Controllers\RegisteredController::class, 'Registered']);
Route::get('/forgot-password', [App\Http\Controllers\PassForgotController::class, 'PassForgot']);

// Inventory
Route::get('/home/inventory', [App\Http\Controllers\Inventory\InventoryController::class, 'inventory'])->name('inventory.inventory');
Route::get('/header', [App\Http\Controllers\Inventory\HeaderController::class, 'header'])->name('inventory.header');
Route::get('/baseboard', [App\Http\Controllers\Inventory\BaseboardController::class, 'baseboard'])->name('inventory.baseboard');
Route::get('/menu', [App\Http\Controllers\Inventory\MenuController::class, 'menu'])->name('inventory.menu');

    // Registrations (Cadastros)
    Route::get('/authors', [App\Http\Controllers\Inventory\Registrations\AuthorController::class, 'author'])->name('inventory.registrations.author');
    Route::get('/genres', [App\Http\Controllers\Inventory\Registrations\GenresController::class, 'genres'])->name('inventory.registrations.genres');
    Route::get('/phones', [App\Http\Controllers\Inventory\Registrations\PhonesController::class, 'phones'])->name('inventory.registrations.phones');
    Route::get('/products', [App\Http\Controllers\Inventory\Registrations\ProductsController::class, 'products'])->name('inventory.registrations.products');
    Route::get('/species', [App\Http\Controllers\Inventory\Registrations\SpeciesController::class, 'species'])->name('inventory.registrations.species');


    // List (Listar)
    Route::get('/list-author', [App\Http\Controllers\Inventory\List\ListauthorController::class, 'listauthor'])->name('inventory.list.listauthor');
    Route::get('/list-genres', [App\Http\Controllers\Inventory\List\ListgenresController::class, 'listgenres'])->name('inventory.list.listgenres');
    Route::get('/list-phones', [App\Http\Controllers\Inventory\List\ListphonesController::class, 'listphones'])->name('inventory.list.listphones');
    Route::get('/list-products', [App\Http\Controllers\Inventory\List\ListproductsController::class, 'listproducts'])->name('inventory.list.listproducts');
    Route::get('/list-species', [App\Http\Controllers\Inventory\List\ListspeciesController::class, 'listspecies'])->name('inventory.list.listspecies');



    // EditForms (Editar Formulários)
    Route::get('/edit-author', [App\Http\Controllers\Inventory\EditForms\EditAuthorController::class, 'editauthor'])->name('inventory.editforms.editauthor');
    Route::get('/edit-genres', [App\Http\Controllers\Inventory\EditForms\EditgenresController::class, 'editauthor'])->name('inventory.editforms.editauthor');
    Route::get('/edit-phones', [App\Http\Controllers\Inventory\EditForms\EditphonesController::class, 'editauthor'])->name('inventory.editforms.editauthor');
    Route::get('/edit-products', [App\Http\Controllers\Inventory\EditForms\EditAuthorController::class, 'editauthor'])->name('inventory.editforms.editauthor');
    Route::get('/edit-species', [App\Http\Controllers\Inventory\EditForms\EditAuthorController::class, 'editauthor'])->name('inventory.editforms.editauthor');


Route::get('/map', [App\Http\Controllers\MapController::class, 'map']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'Home'])->name('home');
Route::get('/create', [App\Http\Controllers\CreateController::class, 'Create'])->name('features.Create');

Route::any('/features', [App\Http\Controllers\FeatureController::class, 'store'])->name('features.store');
