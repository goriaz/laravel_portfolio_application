<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\SkillControl;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;


Route::get('/addHeader', [HeaderController::class,'addRecords']);
Route::post('/addHeader', [HeaderController::class,'Store'])->name('add_record.store');
Route::get('/HeaderControl', [HeaderController::class,'showAllRecords'])->name('HeaderControl');

Route::get('/editHeader/{id}', [HeaderController::class,'editHeader']);
Route::post('/updateHeader', [HeaderController::class,'UpdateHeader'])->name('update.header');

Route::get('/deleteHeader/{id}', [HeaderController::class,'DeleteHeader']);


Route::get('/skillControl', [SkillControl::class,'showAllSkills'])->name('showAllSkills');
Route::get('/add_skill', [SkillControl::class,'add_skill']);
Route::post('/add_skill', [SkillControl::class,'Store'])->name('add_skill.store');
Route::get('/edit_skill/{id}', [SkillControl::class,'edit_skill']);
Route::post('/update_skill', [SkillControl::class,'update_skill'])->name('update.skill');
Route::get('/delete_skill/{id}', [SkillControl::class,'delete_skill']);

Route::get('/all_projects', [ProjectController::class,'all_projects'])->name('all_projects');
Route::get('/add_project', [ProjectController::class,'add_project']);
Route::post('/add_project', [ProjectController::class,'Store'])->name('add_project.store');
Route::get('/edit_project/{id}', [ProjectController::class,'edit_project']);
Route::post('/update_project', [ProjectController::class,'update_project'])->name('update.project');
Route::get('/delete_project/{id}', [ProjectController::class,'delete_project']);


Route::get('/all_abouts', [AboutController::class,'all_abouts'])->name('all_abouts');
Route::get('/add_about', [AboutController::class,'add_about']);
Route::post('/add_about', [AboutController::class,'Store'])->name('add_about.store');
Route::get('/edit_about/{id}', [AboutController::class,'edit_about']);
Route::post('/update_about', [AboutController::class,'update_about'])->name('update.about');
Route::get('/delete_about/{id}', [AboutController::class,'delete_about']);

Route::get('/all_messages', [MessageController::class,'all_messages'])->name('all_messages');
Route::get('/add_message', [MessageController::class,'add_message']);
Route::post('/add_message', [MessageController::class,'Store'])->name('add_message.store');


Route::get('/','App\Http\Controllers\PagesController@index' )->name('home');
Route::get('/admin/dashboard','App\Http\Controllers\PagesController@dashboard' )->name('admin.dashboard');
Route::get('/admin/main','App\Http\Controllers\MainPageController@index' )->name('admin.main');
Route::post('/admin/main','App\Http\Controllers\MainPageController@update' )->name('admin.main.update');
Route::get('/services/create', 'App\Http\Controllers\ServicePagesController@create')->name('admin.services.create');
Route::post('/services/create', 'App\Http\Controllers\ServicePagesController@store')->name('admin.services.store');
Route::get('/services/list', 'App\Http\Controllers\ServicePagesController@list')->name('admin.services.list');
Route::get('/services/edit/{id}', 'App\Http\Controllers\ServicePagesController@edit')->name('admin.services.edit');
 Route::post('/services/update/{id}', 'App\Http\Controllers\ServicePagesController@update')->name('admin.services.update');
Route::delete('/services/destroy/{id}', 'App\Http\Controllers\ServicePagesController@destroy')->name('admin.services.destroy');

Route::get('/portfolios/create', 'App\Http\Controllers\PortfolioPagesController@create')->name('admin.portfolios.create');
Route::put('/portfolios/create', 'App\Http\Controllers\PortfolioPagesController@store')->name('admin.portfolios.store');
Route::get('/portfolios/list', 'App\Http\Controllers\PortfolioPagesController@list')->name('admin.portfolios.list');
Route::get('/portfolios/edit/{id}', 'App\Http\Controllers\PortfolioPagesController@edit')->name('admin.portfolios.edit');
Route::post('/portfolios/update/{id}', 'App\Http\Controllers\PortfolioPagesController@update')->name('admin.portfolios.update');
Route::delete('/portfolios/destroy/{id}', 'App\Http\Controllers\PortfolioPagesController@destroy')->name('admin.portfolios.destroy');

Route::get('/abouts/create', 'App\Http\Controllers\AboutController@create_about')->name('admin.abouts.create');
Route::put('/abouts/create', 'App\Http\Controllers\AboutController@store_about')->name('admin.abouts.store');
Route::get('/abouts/list', 'App\Http\Controllers\AboutController@list_about')->name('admin.abouts.list');
Route::get('/abouts/edit/{id}', 'App\Http\Controllers\AboutController@edit_about')->name('admin.abouts.edit');
Route::post('/abouts/update/{id}', 'App\Http\Controllers\AboutController@update_about')->name('admin.abouts.update');
Route::delete('/abouts/destroy/{id}', 'App\Http\Controllers\AboutController@destroy_about')->name('admin.abouts.destroy');

Route::post('/contact','App\Mail\ContactFormController@store')->name('contact.store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
