<?php

use Illuminate\Support\Facades\Route;
/**
 * Rota para a página inicial * Esta rota responde a requisições GET para a URL "/" e retorna a view "welcome"  
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Rota para a página "Empresa"
 * Esta rota responde a requisições GET para a URL "/empresa" e retorna a view
 */
Route::get('/empresa', function () {
    return view('empresa');
});

/**
 * Rota para a página "Contato"
 * Esta rota responde a requisições GET para a URL "/contato" e retorna a view "contato"    
 */

/**
 * Rota para a página "Any"
 * Esta rota responde a requisições de qualquer método HTTP para a URL "/any" e retorna uma string indicando que a rota responde a qualquer método HTTP.
 */
Route::any('/any', function () {
    return 'Esta rota responde a qualquer método HTTP(GET, POST, PUT, DELETE, etc.)';
});

/**
 * Rota para a página "Match"
 * Esta rota responde a requisições GET e POST para a URL "/match" e retorna uma string indicando que a rota responde apenas a esses métodos HTTP.
 */
Route::match (['get', 'post'], 'match', function () {
    return 'Esta rota responde apenas a requisições GET e POST';
});

/** Rota para a página "Produto"
 * Esta rota responde a requisições GET para a URL "produto/{id}" e retorna uma string indicando o ID do produto passado como parâmetro na URL. O parâmetro {id} é um placeholder que pode ser substituído por qualquer valor, permitindo que a rota seja dinâmica e responda a diferentes IDs de produtos.
 * Esta rota também inclui um segundo parâmetro {cat} para a categoria do produto, permitindo que a rota seja ainda mais dinâmica e responda a diferentes combinações de ID e categoria de produtos.
*/
Route::get('produto/{id}/{cat?}', function ($id, $cat = "") {
    return "O Id do produto é:". $id . "<br>" . " E a categoria é: " . $cat;
});

