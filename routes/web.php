<?php

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

$this->get('search', 'painel\busca@index')->name('busca.home');
$this->get('account', 'painel\usuario@index')->name('perfil.home');
$this->group(['middleware' => 'auth'], function(){
    $this->get('users', 'painel\usuario@usuario')->name('usuarios.home');
});

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
