<?php

app()->get('/', function(){
    return response()->redirect("productos");
});

app()->mount('/productos', function () {
    app()->get('/', 'ProductosController@index');
    app()->get('/crear', 'ProductosController@crear');
    app()->get('/search/{search_text}', 'ProductosController@search');
    app()->post('/store', 'ProductosController@store');
    app()->get('/editar/{id_producto}', 'ProductosController@editar');
    app()->get('/eliminar/{id_producto}', 'ProductosController@eliminar');
    app()->post('/update', 'ProductosController@update');
  });
