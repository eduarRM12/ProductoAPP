<?php
/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\TipoUnidadMedidaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// Rutas para TipoUnidadMedida
$router->group(['prefix' => 'tipo-unidad-medida'], function () use ($router) {
    $router->get('/', 'TipoUnidadMedidaController@index');
    $router->post('/', 'TipoUnidadMedidaController@guardar');
    $router->get('/{id}', 'TipoUnidadMedidaController@buscarPorId');
    $router->put('/{id}', 'TipoUnidadMedidaController@modificar');
    $router->delete('/{id}', 'TipoUnidadMedidaController@eliminar');
});

// Rutas para UnidadMedida
$router->group(['prefix' => 'unidad-medida'], function () use ($router) {
    $router->get('/', 'UnidadMedidaController@index');
    $router->post('/', 'UnidadMedidaController@guardar');
    $router->get('/{id}', 'UnidadMedidaController@buscarPorId');
    $router->put('/{id}', 'UnidadMedidaController@modificar');
    $router->delete('/{id}', 'UnidadMedidaController@eliminar');
});

// Rutas para Producto
$router->group(['prefix' => 'producto'], function () use ($router) {
    $router->get('/', 'ProductoController@index');
    $router->post('/', 'ProductoController@guardar');
    $router->get('/{id}', 'ProductoController@buscarPorId');
    $router->put('/{id}', 'ProductoController@modificar');
    $router->delete('/{id}', 'ProductoController@eliminar');
});

// Rutas para EtiquetaProducto
$router->group(['prefix' => 'etiqueta-producto'], function () use ($router) {
    $router->get('/', 'EtiquetaProductoController@index');
    $router->post('/', 'EtiquetaProductoController@guardar');
    $router->get('/{id}', 'EtiquetaProductoController@buscarPorId');
    $router->put('/{id}', 'EtiquetaProductoController@modificar');
    $router->delete('/{id}', 'EtiquetaProductoController@eliminar');
});

// Rutas para Impuesto
$router->group(['prefix' => 'impuesto'], function () use ($router) {
    $router->get('/', 'ImpuestoController@index');
    $router->post('/', 'ImpuestoController@guardar');
    $router->get('/{id}', 'ImpuestoController@buscarPorId');
    $router->put('/{id}', 'ImpuestoController@modificar');
    $router->delete('/{id}', 'ImpuestoController@eliminar');
});

// Rutas para ProductoImpuesto
$router->group(['prefix' => 'producto-impuesto'], function () use ($router) {
    $router->get('/', 'ProductoImpuestoController@index');
    $router->post('/', 'ProductoImpuestoController@guardar');
    $router->get('/{id}', 'ProductoImpuestoController@buscarPorId');
    $router->put('/{id}', 'ProductoImpuestoController@modificar');
    $router->delete('/{id}', 'ProductoImpuestoController@eliminar');
});

// Rutas para Contacto
$router->group(['prefix' => 'contacto'], function () use ($router) {
    $router->get('/', 'ContactoController@index');
    $router->post('/', 'ContactoController@guardar');
    $router->get('/{id}', 'ContactoController@buscarPorId');
    $router->put('/{id}', 'ContactoController@modificar');
    $router->delete('/{id}', 'ContactoController@eliminar');
});

// Rutas para Bodega
$router->group(['prefix' => 'bodega'], function () use ($router) {
    $router->get('/', 'BodegaController@index');
    $router->post('/', 'BodegaController@guardar');
    $router->get('/{id}', 'BodegaController@buscarPorId');
    $router->put('/{id}', 'BodegaController@modificar');
    $router->delete('/{id}', 'BodegaController@eliminar');
});

// Rutas para FacturaCompra
$router->group(['prefix' => 'factura-compra'], function () use ($router) {
    $router->get('/', 'FacturaCompraController@index');
    $router->post('/', 'FacturaCompraController@guardar');
    $router->get('/{id}', 'FacturaCompraController@buscarPorId');
    $router->put('/{id}', 'FacturaCompraController@modificar');
    $router->delete('/{id}', 'FacturaCompraController@eliminar');
});

// Rutas para ProductoFacturaCompra
$router->group(['prefix' => 'producto-factura-compra'], function () use ($router) {
    $router->get('/', 'ProductoFacturaCompraController@index');
    $router->post('/', 'ProductoFacturaCompraController@guardar');
    $router->get('/{id}', 'ProductoFacturaCompraController@buscarPorId');
    $router->put('/{id}', 'ProductoFacturaCompraController@modificar');
    $router->delete('/{id}', 'ProductoFacturaCompraController@eliminar');
});

// Rutas para OrdenCompra
$router->group(['prefix' => 'orden-compra'], function () use ($router) {
    $router->get('/', 'OrdenCompraController@index');
    $router->post('/', 'OrdenCompraController@guardar');
    $router->get('/{id}', 'OrdenCompraController@buscarPorId');
    $router->put('/{id}', 'OrdenCompraController@modificar');
    $router->delete('/{id}', 'OrdenCompraController@eliminar');
});

// Rutas para OrdenCotizacion
$router->group(['prefix' => 'orden-cotizacion'], function () use ($router) {
    $router->get('/', 'OrdenCotizacionController@index');
    $router->post('/', 'OrdenCotizacionController@guardar');
    $router->get('/{id}', 'OrdenCotizacionController@buscarPorId');
    $router->put('/{id}', 'OrdenCotizacionController@modificar');
    $router->delete('/{id}', 'OrdenCotizacionController@eliminar');
});

// Rutas para OrdenCompraProducto
$router->group(['prefix' => 'orden-compra-producto'], function () use ($router) {
    $router->get('/', 'OrdenCompraProductoController@index');
    $router->post('/', 'OrdenCompraProductoController@guardar');
    $router->get('/{id}', 'OrdenCompraProductoController@buscarPorId');
    $router->put('/{id}', 'OrdenCompraProductoController@modificar');
    $router->delete('/{id}', 'OrdenCompraProductoController@eliminar');
});

// Rutas para ProductoBodega
$router->group(['prefix' => 'producto-bodega'], function () use ($router) {
    $router->get('/', 'ProductoBodegaController@index');
    $router->post('/', 'ProductoBodegaController@guardar');
    $router->get('/{id}', 'ProductoBodegaController@buscarPorId');
    $router->put('/{id}', 'ProductoBodegaController@modificar');
    $router->delete('/{id}', 'ProductoBodegaController@eliminar');
});
