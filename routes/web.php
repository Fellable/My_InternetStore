<?php


use App\Http\Controllers\Admin\IndexController;
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



Route::group(['prefix'=> 'admin'], function() {
    Route::get('/', IndexController::class)->name('admin.main');

    Route::group(['namespace' => '\App\Http\Controllers\Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::get('/{category}', 'ShowController')->name('category.show');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
    });

    Route::group(['namespace' => '\App\Http\Controllers\Color', 'prefix' => 'color'], function () {
        Route::get('/', 'IndexController')->name('color.index');
        Route::get('/create', 'CreateController')->name('color.create');
        Route::post('/', 'StoreController')->name('color.store');
        Route::get('/{color}/edit', 'EditController')->name('color.edit');
        Route::get('/{color}', 'ShowController')->name('color.show');
        Route::patch('/{color}', 'UpdateController')->name('color.update');
        Route::delete('/{color}', 'DeleteController')->name('color.delete');
    });

    Route::group(['namespace' => '\App\Http\Controllers\Tag', 'prefix' => 'tag'], function () {
        Route::get('/', 'IndexController')->name('tag.index');
        Route::get('/create', 'CreateController')->name('tag.create');
        Route::post('/', 'StoreController')->name('tag.store');
        Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
        Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::patch('/{tag}', 'UpdateController')->name('tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
    });


    Route::group(['namespace' => '\App\Http\Controllers\User', 'prefix' => 'user'], function () {
        Route::get('/', 'IndexController')->name('user.index');
        Route::get('/create', 'CreateController')->name('user.create');
        Route::post('/', 'StoreController')->name('user.store');
        Route::get('/{user}/edit', 'EditController')->name('user.edit');
        Route::get('/{user}', 'ShowController')->name('user.show');
        Route::patch('/{user}', 'UpdateController')->name('user.update');
        Route::delete('/{user}', 'DeleteController')->name('user.delete');
    });


    Route::group(['namespace' => '\App\Http\Controllers\Product', 'prefix' => 'product'], function () {
        Route::get('/', 'IndexController')->name('product.index');
        Route::get('/create', 'CreateController')->name('product.create');
        Route::post('/', 'StoreController')->name('product.store');
        Route::get('/{product}/edit', 'EditController')->name('product.edit');
        Route::get('/{product}', 'ShowController')->name('product.show');
        Route::patch('/{product}', 'UpdateController')->name('product.update');
        Route::delete('/{product}', 'DeleteController')->name('product.delete');
    });

    Route::group(['namespace' => '\App\Http\Controllers\Group', 'prefix' => 'group'], function () {
        Route::get('/', 'IndexController')->name('group.index');
        Route::get('/create', 'CreateController')->name('group.create');
        Route::post('/', 'StoreController')->name('group.store');
        Route::get('/{group}/edit', 'EditController')->name('group.edit');
        Route::get('/{group}', 'ShowController')->name('group.show');
        Route::patch('/{group}', 'UpdateController')->name('group.update');
        Route::delete('/{group}', 'DeleteController')->name('group.delete');
    });

});


Route::get('{page}', \App\Http\Controllers\Client\IndexController::class)->where('page', '.*');

