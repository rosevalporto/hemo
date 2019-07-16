<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Principal',function () { //pagina depois do login
 	    return view('principal');
});

Route::get('/Principal/doacao','ControllerDoacao@index');

// Route::get('/', function() {  
//    return response()->json(['stuff' => phpinfo()]);
// });  
//      // rota para acessar o php.ini

