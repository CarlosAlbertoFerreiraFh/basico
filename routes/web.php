<?php



Route::get('/', function () {
    return 'Curso de Laravel Basico!';
});

Route::group(['prefix' => 'admin'], function() {
	Route::resource('clientes', 'CustomersController');
});
