<?php
Route::get('/', function () {
    return view('Welcome');
});

Route::get('produtos','ProdutosController@index');
Route::get('produtos/create','ProdutosController@create');
Route::post('produtos/store','ProdutosController@store');