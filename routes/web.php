<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

// Autenticação
Route::get('/authenticate', [App\Http\Controllers\AuthenticateController::class, 'Authenticate'])->name('authenticate');
Route::post('/authenticate-user', [App\Http\Controllers\AuthenticateController::class, 'authenticateUser'])->name('authenticate.user');
Route::get('/logout', [AuthenticateController::class, 'endsession'])->name('logout');
Route::post('/check-account-status', [App\Http\Controllers\AuthenticateController::class, 'checkAccountStatus'])->name('check.account.status');

Route::get('/start-registration', [App\Http\Controllers\RegisteredController::class, 'Registered']);
Route::get('/forgot-password', [App\Http\Controllers\PassForgotController::class, 'PassForgot']);

// Inventory
    //Email
    Route::post('/enviar-email', [App\Http\Controllers\EmailController::class, 'enviarEmail'])->name('enviarEmail');
Route::get('/home/inventory', [App\Http\Controllers\Inventory\InventoryController::class, 'inventory'])->name('Inventory.inventory');
Route::get('/header', [App\Http\Controllers\Inventory\HeaderController::class, 'header'])->name('Inventory.header');
Route::get('/baseboard', [App\Http\Controllers\Inventory\BaseboardController::class, 'baseboard'])->name('Inventory.baseboard');
Route::get('/menu', [App\Http\Controllers\Inventory\MenuController::class, 'menu'])->name('Inventory.menu');

    // Carries (Carregar)
    Route::get('/home/inventory/carrieslist', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistController::class, 'carrieslist'])->name('inventory.CarriesForms.carrieslist');
    Route::get('/home/inventory/carrieslistauthor', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistauthorController::class, 'carrieslistauthor'])->name('inventory.CarriesForms.carrieslistauthor');
    Route::get('/home/inventory/carrieslistgenres', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistgenresController::class, 'carrieslistgenres'])->name('inventory.CarriesForms.carrieslistgenres');
    Route::get('/home/inventory/carrieslistspecies', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistspeciesController::class, 'carrieslistspecies'])->name('inventory.CarriesForms.carrieslistspecies');
    Route::get('/home/inventory/carrieslistepithet', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistepithetController::class, 'carrieslistepithet'])->name('inventory.CarriesForms.carrieslistepithet');
    Route::get('/home/inventory/carrieslistfamilies', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistfamiliesController::class, 'carrieslistfamilies'])->name('inventory.CarriesForms.carrieslistfamilies');
    Route::get('/home/inventory/carrieslistexoticnative', [App\Http\Controllers\Inventory\CarriesForms\CarrieslistexoticnativeController::class, 'carrieslistexoticnative'])->name('inventory.CarriesForms.carrieslistexoticnative');

    // Registrations (Cadastros)
    Route::get('/home/inventory/plant', [App\Http\Controllers\Inventory\Registrations\PlantController::class, 'plant'])->name('inventory.registrations.plant');
    Route::get('/home/inventory/generalrecords', [App\Http\Controllers\Inventory\Registrations\GeneralrecordsController::class, 'generalrecords'])->name('inventory.registrations.generalrecords');
    Route::get('/home/inventory/authors', [App\Http\Controllers\Inventory\Registrations\AuthorController::class, 'author'])->name('inventory.registrations.author');
    Route::get('/home/inventory/genres', [App\Http\Controllers\Inventory\Registrations\GenresController::class, 'genres'])->name('inventory.registrations.genres');
    Route::get('/home/inventory/species', [App\Http\Controllers\Inventory\Registrations\SpeciesController::class, 'species'])->name('inventory.registrations.species');
    Route::get('/home/inventory/epithet', [App\Http\Controllers\Inventory\Registrations\EpithetController::class, 'epithet'])->name('inventory.registrations.epithet');
    Route::get('/home/inventory/families', [App\Http\Controllers\Inventory\Registrations\FamiliesController::class, 'families'])->name('inventory.registrations.families');
    Route::get('/home/inventory/exoticnative', [App\Http\Controllers\Inventory\Registrations\ExoticnativeController::class, 'exoticnative'])->name('inventory.registrations.exoticnative');

    // List (Listar)
    Route::get('/home/inventory/list-author', [App\Http\Controllers\Inventory\ListForms\ListauthorController::class, 'Listauthor'])->name('inventory.ListForms.listauthor');
    Route::get('/home/inventory/list-genres', [App\Http\Controllers\Inventory\ListForms\ListgenresController::class, 'listgenres'])->name('inventory.list.listgenres');
    Route::get('/home/inventory/list-species', [App\Http\Controllers\Inventory\ListForms\ListspeciesController::class, 'listspecies'])->name('inventory.list.listspecies');
    Route::get('/home/inventory/list-epithet', [App\Http\Controllers\Inventory\ListForms\ListepithetController::class, 'listepithet'])->name('inventory.list.listepithet');
    Route::get('/home/inventory/list-families', [App\Http\Controllers\Inventory\ListForms\ListfamiliesController::class, 'listfamilies'])->name('inventory.list.listfamilies');
    Route::get('/home/inventory/list-exoticnative', [App\Http\Controllers\Inventory\ListForms\ListexoticnativeController::class, 'listexoticnative'])->name('inventory.registrations.listexoticnative');
    Route::get('/home/inventory/list-locations', [App\Http\Controllers\Inventory\ListForms\ListlocationsController::class, 'listlocations'])->name('inventory.registrations.listlocations');

    // EditForms (Editar Formulários)
    Route::get('/home/inventory/list-author/edit-author', [App\Http\Controllers\Inventory\EditForms\EditAuthorController::class, 'editauthor'])->name('inventory.editforms.editauthor');
    Route::get('/home/inventory/list-genres/edit-genres', [App\Http\Controllers\Inventory\EditForms\EditgenresController::class, 'editgenres'])->name('inventory.editforms.editgenres');
    Route::get('/home/inventory/list-species/edit-species', [App\Http\Controllers\Inventory\EditForms\EditspeciesController::class, 'editspecies'])->name('inventory.editforms.editspecies');
    Route::get('/home/inventory/list-epithet/edit-epithet', [App\Http\Controllers\Inventory\EditForms\EditepithetController::class, 'editepithet'])->name('inventory.editforms.editepithet');
    Route::get('/home/inventory/list-families/edit-families', [App\Http\Controllers\Inventory\EditForms\EditfamiliesController::class, 'editfamilies'])->name('inventory.editforms.editfamilies');
    Route::get('/home/inventory/list-locations/edit-locations', [App\Http\Controllers\Inventory\EditForms\EditlocationsController::class, 'editlocations'])->name('inventory.editforms.editlocations');
    Route::get('/home/inventory/list-exoticnative/edit-exoticnative', [App\Http\Controllers\Inventory\EditForms\EditexoticnativeController::class, 'editexoticnative'])->name('inventory.editforms.editexoticnative');

    // ChangeForms (processo de edição de formulário que altera os registros Formulários)
    Route::get('/change-author', [App\Http\Controllers\Inventory\ChangeForms\ChangeAuthorController::class, 'changeauthor'])->name('inventory.changeforms.changeauthor');
    Route::get('/change-genres', [App\Http\Controllers\Inventory\ChangeForms\ChangeGenresController::class, 'changegenres'])->name('inventory.changeforms.changegenres');
    Route::get('/change-species', [App\Http\Controllers\Inventory\ChangeForms\ChangespeciesController::class, 'changespecies'])->name('inventory.changeforms.changespecies');
    Route::get('/change-epithet', [App\Http\Controllers\Inventory\ChangeForms\ChangeepithetController::class, 'changeepithet'])->name('inventory.changeforms.changeepithet');
    Route::get('/change-families', [App\Http\Controllers\Inventory\ChangeForms\ChangefamiliesController::class, 'changefamilies'])->name('inventory.changeforms.changefamilies');
    Route::get('/change-locations', [App\Http\Controllers\Inventory\ChangeForms\ChangelocationsController::class, 'changelocations'])->name('inventory.changeforms.changelocations');
    Route::get('/change-exoticnative', [App\Http\Controllers\Inventory\ChangeForms\ChangeexoticnativeController::class, 'changeexoticnative'])->name('inventory.changeforms.changeexoticnative');

    // SaveForms (processo de salvamento de cadastros)
    Route::get('/save-author', [App\Http\Controllers\Inventory\SaveForms\SaveauthorController::class, 'saveauthor'])->name('inventory.saveforms.saveauthor');
    Route::get('/save-genres', [App\Http\Controllers\Inventory\SaveForms\SavegenresController::class, 'savegenres'])->name('inventory.saveforms.savegenres');
    Route::get('/save-species', [App\Http\Controllers\Inventory\SaveForms\SavespeciesController::class, 'savespecies'])->name('inventory.saveforms.savespecies');
    Route::get('/save-epithet', [App\Http\Controllers\Inventory\SaveForms\SaveepithetController::class, 'saveepithet'])->name('inventory.saveforms.saveepithet');
    Route::get('/save-families', [App\Http\Controllers\Inventory\SaveForms\SavefamiliesController::class, 'savefamilies'])->name('inventory.saveforms.savefamilies');
    Route::get('/save-exoticnative', [App\Http\Controllers\Inventory\SaveForms\SaveexoticnativeController::class, 'saveexoticnative'])->name('inventory.saveforms.saveexoticnative');
    Route::get('/save-locations', [App\Http\Controllers\Inventory\SaveForms\SavelocationsController::class, 'savelocations'])->name('inventory.saveforms.savelocations');
    Route::get('/save-plant', [App\Http\Controllers\Inventory\SaveForms\SaveplantController::class, 'saveplant'])->name('inventory.saveforms.saveplant');

    // DeleteForms (processo de exclusão de registros)
    Route::get('/remove-author', [App\Http\Controllers\Inventory\DeleteForms\RemoveAuthorController::class, 'removeauthor'])->name('inventory.deleteforms.removeauthor');
    Route::get('/remove-genres', [App\Http\Controllers\Inventory\DeleteForms\RemoveGenresController::class, 'removegenres'])->name('inventory.deleteforms.removegenres');
    Route::get('/remove-species', [App\Http\Controllers\Inventory\DeleteForms\RemovespeciesController::class, 'removespecies'])->name('inventory.deleteforms.removespecies');
    Route::get('/remove-epithet', [App\Http\Controllers\Inventory\DeleteForms\RemoveepithetController::class, 'removeepithet'])->name('inventory.deleteforms.removeepithet');
    Route::get('/remove-families', [App\Http\Controllers\Inventory\DeleteForms\RemovefamiliesController::class, 'removefamilies'])->name('inventory.deleteforms.removefamilies');
    Route::get('/remove-locations', [App\Http\Controllers\Inventory\DeleteForms\RemovelocationsController::class, 'removelocations'])->name('inventory.deleteforms.removelocations');
    Route::get('/remove-exoticnative', [App\Http\Controllers\Inventory\DeleteForms\RemoveexoticnativeController::class, 'removeexoticnative'])->name('inventory.deleteforms.removeexoticnative');

Route::get('/map', [App\Http\Controllers\MapController::class, 'map']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'Home'])->name('home');
use App\Http\Controllers\CreateController;

Route::get('/create', [CreateController::class, 'create'])->name('features.create'); // Exibe o formulário
Route::post('/plantas', [CreateController::class, 'store'])->name('create.store'); // Envia os dados via POST


Route::any('/features', [App\Http\Controllers\FeatureController::class, 'store'])->name('features.store');
