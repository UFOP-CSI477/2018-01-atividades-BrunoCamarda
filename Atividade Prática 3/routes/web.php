<?php
use App\Procedure;

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

Route::get('/', function(){
	return view('layout.principal');
});

Route::get('/procedures/editar', 'ProceduresController@editar')->name('procedures.editar');

Route::get('/tests/relatorioCliente', 'TestsController@relatorioCliente')->name('tests.relatorioCliente');

Route::get('/tests/{test}/relatorio', 'TestsController@relatorioClienteShow')->name('tests.relatorioClienteShow');

Route::get('/tests/relatorioProcedimento', 'TestsController@relatorioProcedimento')->name('tests.relatorioProcedimento');

Route::get('/tests/{test}/relatorioP', 'TestsController@relatorioProcedimentoShow')->name('tests.relatorioProcedimentoShow');


Route::resource('/tests', 'TestsController');

Route::resource('/procedures', 'ProceduresController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
