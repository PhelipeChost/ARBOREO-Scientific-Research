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
Route::get('/authenticate', [App\Http\Controllers\AuthenticateController::class, 'Authenticate']);
Route::get('/start-registration', [App\Http\Controllers\RegisteredController::class, 'Registered']);
Route::get('/forgot-password', [App\Http\Controllers\PassForgotController::class, 'PassForgot']);

// Inventory
Route::get('/home/inventory', [App\Http\Controllers\Inventory\InventoryController::class, 'inventory'])->name('inventory.inventory');
Route::get('/header', [App\Http\Controllers\Inventory\HeaderController::class, 'header'])->name('inventory.header');
Route::get('/baseboard', [App\Http\Controllers\Inventory\BaseboardController::class, 'baseboard'])->name('inventory.baseboard');
Route::get('/menu', [App\Http\Controllers\Inventory\MenuController::class, 'menu'])->name('inventory.menu');

    // Registrations (Cadastros)
    Route::get('/home/inventory/authors', [App\Http\Controllers\Inventory\Registrations\AuthorController::class, 'author'])->name('inventory.registrations.author');
    Route::get('/home/inventory/genres', [App\Http\Controllers\Inventory\Registrations\GenresController::class, 'genres'])->name('inventory.registrations.genres');
    Route::get('/home/inventory/phones', [App\Http\Controllers\Inventory\Registrations\PhonesController::class, 'phones'])->name('inventory.registrations.phones');
    Route::get('/home/inventory/products', [App\Http\Controllers\Inventory\Registrations\ProductsController::class, 'products'])->name('inventory.registrations.products');
    Route::get('/home/inventory/species', [App\Http\Controllers\Inventory\Registrations\SpeciesController::class, 'species'])->name('inventory.registrations.species');


    // List (Listar)
    Route::get('/home/inventory/list-author', [App\Http\Controllers\Inventory\ListForms\ListauthorController::class, 'listauthor'])->name('inventory.ListForms.listauthor');
    Route::get('/home/inventory/list-genres', [App\Http\Controllers\Inventory\ListForms\ListgenresController::class, 'listgenres'])->name('inventory.list.listgenres');
    Route::get('/home/inventory/list-phones', [App\Http\Controllers\Inventory\ListForms\ListphonesController::class, 'listphones'])->name('inventory.list.listphones');
    Route::get('/home/inventory/list-products', [App\Http\Controllers\Inventory\ListForms\ListproductsController::class, 'listproducts'])->name('inventory.list.listproducts');
    Route::get('/home/inventory/list-species', [App\Http\Controllers\Inventory\ListForms\ListspeciesController::class, 'listspecies'])->name('inventory.list.listspecies');



    // EditForms (Editar Formulários)
    Route::get('/home/inventory/list-author/edit-author', [App\Http\Controllers\Inventory\EditForms\EditAuthorController::class, 'editauthor'])->name('inventory.editforms.editauthor');
    Route::get('/home/inventory/list-genres/edit-genres', [App\Http\Controllers\Inventory\EditForms\EditgenresController::class, 'editgenres'])->name('inventory.editforms.editgenres');
    Route::get('/home/inventory/list-phones/edit-phones', [App\Http\Controllers\Inventory\EditForms\EditphonesController::class, 'editphones'])->name('inventory.editforms.editphonesr');
    Route::get('/home/inventory/list-products/edit-products', [App\Http\Controllers\Inventory\EditForms\EditproductsController::class, 'editproducts'])->name('inventory.editforms.editproducts');
    Route::get('/home/inventory/list-species/edit-species', [App\Http\Controllers\Inventory\EditForms\EditspeciesController::class, 'editspecies'])->name('inventory.editforms.editspecies');

    // ChangeForms (processo de edição de formulário que altera os registros Formulários)
    Route::get('/change-author', [App\Http\Controllers\Inventory\ChangeForms\ChangeAuthorController::class, 'changeauthor'])->name('inventory.changeforms.changeauthor');
    Route::get('/change-genres', [App\Http\Controllers\Inventory\ChangeForms\ChangeGenresController::class, 'changegenres'])->name('inventory.changeforms.changegenres');
    Route::get('/change-phones', [App\Http\Controllers\Inventory\ChangeForms\ChangephonesController::class, 'changephones'])->name('inventory.changeforms.changephones');
    Route::get('/change-products', [App\Http\Controllers\Inventory\ChangeForms\ChangeproductsController::class, 'changeproducts'])->name('inventory.changeforms.changeproducts');
    Route::get('/change-species', [App\Http\Controllers\Inventory\ChangeForms\ChangespeciesController::class, 'changespecies'])->name('inventory.changeforms.changespecies');

        
    // SaveForms (processo de salvamento de cadastros)
    Route::get('/save-author', [App\Http\Controllers\Inventory\SaveForms\SaveauthorController::class, 'saveauthor'])->name('inventory.saveforms.saveauthor');
    Route::get('/save-genres', [App\Http\Controllers\Inventory\SaveForms\SavegenresController::class, 'savegenres'])->name('inventory.saveforms.savegenres');
    Route::get('/save-phones', [App\Http\Controllers\Inventory\SaveForms\SavephonesController::class, 'savephones'])->name('inventory.saveforms.savephones');
    Route::get('/save-products', [App\Http\Controllers\Inventory\SaveForms\SaveproductsController::class, 'saveproducts'])->name('inventory.saveforms.saveproducts');
    Route::get('/save-species', [App\Http\Controllers\Inventory\SaveForms\SavespeciesController::class, 'savespecies'])->name('inventory.saveforms.savespecies');

    // DeleteForms (processo de exclusão de registros)
    Route::get('/remove-author', [App\Http\Controllers\Inventory\DeleteForms\RemoveAuthorController::class, 'removeauthor'])->name('inventory.deleteforms.removeauthor');
    Route::get('/remove-genres', [App\Http\Controllers\Inventory\DeleteForms\RemoveGenresController::class, 'removegenres'])->name('inventory.deleteforms.removegenres');
    Route::get('/remove-phones', [App\Http\Controllers\Inventory\DeleteForms\RemovephonesController::class, 'removephones'])->name('inventory.deleteforms.removephones');
    Route::get('/remove-products', [App\Http\Controllers\Inventory\DeleteForms\RemoveproductsController::class, 'removeproducts'])->name('inventory.deleteforms.removeproducts');
    Route::get('/remove-species', [App\Http\Controllers\Inventory\DeleteForms\RemovespeciesController::class, 'removespecies'])->name('inventory.deleteforms.removespecies');

Route::get('/map', [App\Http\Controllers\MapController::class, 'map']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'Home'])->name('home');
Route::get('/create', [App\Http\Controllers\CreateController::class, 'Create'])->name('features.Create');

Route::any('/features', [App\Http\Controllers\FeatureController::class, 'store'])->name('features.store');
