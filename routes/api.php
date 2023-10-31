<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('v1/login', [App\Http\Controllers\ApiController::class, 'login']);
Route::post('v1/validar_codigo', [App\Http\Controllers\ApiController::class, 'validar_codigo']);
Route::post('v1/solicitar_codigo', [App\Http\Controllers\ApiController::class, 'solicitar_codigo']);
Route::post('v1/nueva_clave', [App\Http\Controllers\ApiController::class, 'nueva_clave']);
Route::post('v1/registrar_usuario', [App\Http\Controllers\ApiController::class, 'registrar_usuario']);

Route::post('v1/solicitar_codigo_password', [App\Http\Controllers\ApiController::class, 'solicitar_codigo_password']);
Route::post('v1/validar_codigo_password', [App\Http\Controllers\ApiController::class, 'validar_codigo_password']);

Route::group(['prefix' =>'v1','middleware' => ['auth:sanctum']], function () {
	Route::get('logout', [App\Http\Controllers\ApiController::class, 'logout']);
	Route::get('refresh-token', [App\Http\Controllers\ApiController::class, 'refresh_token']);
	Route::get('profile', [App\Http\Controllers\ApiController::class, 'profile']);
	Route::post('profile', [App\Http\Controllers\ApiController::class, 'profile_update']);
	Route::post('password_update', [App\Http\Controllers\ApiController::class, 'password_update']);
	Route::post('lista_propiedades', [App\Http\Controllers\ApiController::class, 'lista_propiedades']);
	Route::get('propiedad_detalle/{slug}', [App\Http\Controllers\ApiController::class, 'propiedad_detalle']);
	Route::get('comentarios/{property_user_id}', [App\Http\Controllers\ApiController::class, 'comentarios']);
	Route::post('comentarios_store', [App\Http\Controllers\ApiController::class, 'comentarios_store']);
	Route::get('list_package_service', [App\Http\Controllers\ApiController::class, 'list_package_service']);
	Route::get('profile_user/{slug}', [App\Http\Controllers\ApiController::class, 'profile_user']);

	Route::group(['prefix' => 'propietario/'], function (){
		Route::get('lista_propiedades', [App\Http\Controllers\ApiController::class, 'propietarios_list_properties']);
		Route::get('property_type/{properties_type_id}', [App\Http\Controllers\ApiController::class, 'propietarios_property_type']);
		Route::get('currencies', [App\Http\Controllers\ApiController::class, 'list_currencies']);
		Route::get('pay_firm', [App\Http\Controllers\ApiController::class, 'list_pay_firm']);
		Route::get('property_type', [App\Http\Controllers\ApiController::class, 'list_property_type']);
		Route::get('period_payment', [App\Http\Controllers\ApiController::class, 'list_period_payment']);
		Route::post('store_property', [App\Http\Controllers\ApiController::class, 'store_property']);
		Route::post('property_update', [App\Http\Controllers\ApiController::class, 'property_update']);
		Route::post('ubicacion_update', [App\Http\Controllers\ApiController::class, 'property_ubicacion_update']);
		Route::get('property_edit/{slug}', [App\Http\Controllers\ApiController::class, 'property_edit']);
		Route::get('list_image/{property_user_id}', [App\Http\Controllers\ApiController::class, 'list_image_property']);
		Route::post('store_image/{property_user_id}', [App\Http\Controllers\ApiController::class, 'store_image_property']);
		Route::get('delete_image/{id}', [App\Http\Controllers\ApiController::class, 'delete_image_property']);
		Route::get('list_videos/{property_user_id}', [App\Http\Controllers\ApiController::class, 'list_videos_property']);
		Route::post('store_video/{property_user_id}', [App\Http\Controllers\ApiController::class, 'store_video_property']);
		Route::get('delete_video/{id}', [App\Http\Controllers\ApiController::class, 'delete_video_property']);
		Route::post('image_principal/{property_user_id}', [App\Http\Controllers\ApiController::class, 'store_image_principal_property']);
		Route::get('image_principal/{property_user_id}', [App\Http\Controllers\ApiController::class, 'lista_image_principal_property']);
		Route::get('delete_imagen_principal/{id}', [App\Http\Controllers\ApiController::class, 'delete_imagen_principal_property']);
		Route::get('tienda', [App\Http\Controllers\ApiController::class, 'tienda_property']);
		Route::post('save_purchase_property', [App\Http\Controllers\ApiController::class, 'save_purchase_property']);
		Route::post('generar_pago_chat', [App\Http\Controllers\ApiController::class, 'generar_pago_chat']);
	});

	Route::group(['prefix' => 'inquilino/'], function (){
		Route::post('contactar_propietario', [App\Http\Controllers\ApiController::class, 'contactar_propietario']);
	});

	Route::post('tienda', [App\Http\Controllers\ApiController::class, 'tienda']);
	Route::post('guardar_compra', [App\Http\Controllers\ApiController::class, 'guardar_compra']);
	Route::get('mis_compras', [App\Http\Controllers\ApiController::class, 'mis_compras']);
	Route::post('anunciar_propiedad', [App\Http\Controllers\ApiController::class, 'anunciar_propiedad']);
	Route::get('consultar_solicitud/{solicitud_id}', [App\Http\Controllers\ApiController::class, 'consultar_solicitud']);
	Route::post('enviar_solicitud', [App\Http\Controllers\ApiController::class, 'enviar_solicitud']);

	Route::get('departament', [App\Http\Controllers\ApiController::class, 'get_departament']);
	Route::get('province/{department_id}', [App\Http\Controllers\ApiController::class, 'get_province']);
	Route::get('district/{province_id}', [App\Http\Controllers\ApiController::class, 'get_district']);

	Route::post('solicitud_store', [App\Http\Controllers\ApiController::class, 'solicitud_store']);
	Route::post('device_register', [App\Http\Controllers\ApiController::class, 'device_register']);
	Route::post('send_notification', [App\Http\Controllers\ApiController::class, 'send_notification']);
	Route::post('send_message_asesor', [App\Http\Controllers\ApiController::class, 'send_message_asesor']);
	Route::get('puntos', [App\Http\Controllers\ApiController::class, 'puntos']);
	Route::post('enviar_video', [App\Http\Controllers\ApiController::class, 'enviar_video']);

	Route::group(['prefix' => 'chat/'], function (){
		Route::post('enviar_documento', [App\Http\Controllers\ApiController::class, 'enviar_documento']);
		Route::get('marcar_alquilado/{property_user_id}', [App\Http\Controllers\ApiController::class, 'marcar_alquilado']);
	});

    Route::group(['prefix' => 'culqi/'], function (){
        Route::resource('checkout', \App\Http\Controllers\Api\Culqi\CheckoutController::class);
        Route::resource('cliente', \App\Http\Controllers\Api\Culqi\ClienteController::class);
        Route::resource('card', \App\Http\Controllers\Api\Culqi\TarjetaController::class);
    });

});

Route::get('/v1/store_user_firebase', [App\Http\Controllers\ApiController::class, 'store_user_firebase']);
Route::get('/v1/index_user_firebase', [App\Http\Controllers\ApiController::class, 'index_user_firebase']);
