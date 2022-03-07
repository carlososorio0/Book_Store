<?php

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


Route::bind('products', function($author){
    return App\products::where('author', $author)->first();
});



//Category dependency injection
Route::bind('category', function($category){
        return App\Category::find($category);
});



//User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});




Route::get('/', [
    'as' => 'home',
    'uses' =>    'StoreController@index']);

    Route::get('products/{author}', [
        'as' => 'products-detail',
        'uses' => 'StoreController@show'
    ]);



    //Carrito 

    Route::get('cart/show', [
        'as' => 'cart-show',
        'uses' => 'CartController@show'
    ]);


    Route::get('cart/add/{products}', [
        'as' => 'cart-add',
        'uses' => 'CartController@add'
    ]);

    Route::get('cart/delete/{products}',[
        'as' => 'cart-delete',
        'uses' => 'CartController@delete'
    ]);


    Route::get('cart/trash',[
        'as' => 'cart-trash',
        'uses' => 'CartController@trash'
    ]
    );

    Route::get('cart/update/{products}/{quantity?}', [
        'as' => 'cart-update',
        'uses' => 'CartController@update'
    ]);



    Route::get('order-detail', [
        'middleware' => 'auth',
        'as' => 'order-detail',
        'uses' => 'CartController@orderDetail'
    ]);

// Authentication Routes...


            Route::get('auth/login', [
            'as' => 'login-get',
            'uses' => 'Auth\AuthController@getLogin'
            ]);
            
            Route::post('auth/login', [
                'as' => 'login-post',
            'uses' => 'Auth\AuthController@postLogin'
            ]);

            Route::get('auth/logout', [
                'as' => 'logout',
            'uses' => 'Auth\AuthController@getLogout'
            ]);



            

// Registration Routes...

                Route::get('auth/register', [
                'as' => 'register-get',
                'uses' => 'Auth\AuthController@getRegister'
                ]);



                Route::post('auth/register', [
                    'as' => 'register-post',
                    'uses' => 'Auth\AuthController@postRegister'
                    ]);
    


                    //ADMIN

                    
             
         

            Route::get('admin/home', function(){
                 
                
                        return view('admin.home');
             });

            Route::resource('admin/category', 'Admin\CategoryController');

            Route::resource('admin/product', 'Admin\ProductController');

            Route::resource('admin/user', 'Admin\UserController');

            

            //EMAIL


            //RUTA DE FORMULARIO
            Route::get('contact', [
                'as' => 'contact',
                'uses' => 'ControllerMail@index'
            ]);

            //RUTA DE ENVIO

            Route::post('send', 'ControllerMail@send');

            
            
            //RUTA DE INFORMACION

            Route::get('info', [
                'as' => 'info',
                'uses' => 'Controllerinfo@index'
            ]);

           
        Auth::routes();



           


                

                    






    





                    
                  



            