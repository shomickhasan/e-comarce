<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ShowdatainFrontendController;
use App\Http\Controllers\Frontend\SocialloginControler;
use App\Http\Controllers\SslCommerzPaymentController;

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
// Route::get('/welcome', function () {
//     return view('welcome');
// });

//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

/*--------------------------------------------
          Route For Frontend
---------------------------------------------*/

/*Route::get('/', function () {
    return view('frontend.index');
});
*/
Route::get('/',[ShowdatainFrontendController::class,'Showdata'])->name('home');

Route::get('/products/{id}',[ShowdatainFrontendController::Class,'products'])->name('products');

//Route for user Login
Route::get('/userlogin',[ShowdatainFrontendController::Class,'userlogin'])->name('userlogin');

// ---Route for addto cart mnually with ajax----
/*Route::group(['prefix'=>'/cart'],function(){
    Route::post('/add','App\Http\Controllers\Frontend\AddtoCartController@store')->name('cart.add');
    Route::get('/show/{id}','App\Http\Controllers\Frontend\AddtoCartController@show');
    Route::get('/delete/{id}','App\Http\Controllers\Frontend\AddtoCartController@destroy');
});*/
// ---Route for addto cart using pakeg----
Route::group(['prefix'=>'/cart'],function(){
    Route::get('/view','App\Http\Controllers\Frontend\AddtoCartController@index')->name('viewcart');
    Route::post('/add','App\Http\Controllers\Frontend\AddtoCartController@store')->name('cart.add');
    Route::post('/update/{id}','App\Http\Controllers\Frontend\AddtoCartController@update')->name('cart.update');
    Route::get('/delete/{id}','App\Http\Controllers\Frontend\AddtoCartController@destroy')->name('cart.delete');
});

Route::get('/sociallogin/google/gotogoogle','App\Http\Controllers\Frontend\SocialloginControler@loginwithgoogle')->name('loginwithgoogle');
Route::get('/sociallogin/google/googlelogin','App\Http\Controllers\Frontend\SocialloginControler@logininfostore');

Route::get('/sociallogin/facebook/gotofacebook','App\Http\Controllers\Frontend\SocialloginControler@gotofacebook')->name('loginwithfacebook');





// SSLCOMMERZ Start
//Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('checkout');

Route::post('/paybill', [SslCommerzPaymentController::class, 'index'])->name('paybill');
//Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

//apply cupon 
Route::post('/applycupon','App\Http\Controllers\Frontend\ApplyCuponController@index');


/*--------------------------------------------
          Route For Backend
---------------------------------------------*/
Route::get('/admin', function () {
    return view('backend.adminDashboard');
})->middleware(['auth','controll'])->name('dashboard');


Route::group(['prefix'=>'/admin'], function(){

    Route::group(['prefix'=>'/category'],function(){
        Route::get('/add','App\Http\Controllers\Backend\Category\Categorycontroller@index')->name('category.add');
        Route::post('/mycategory','App\Http\Controllers\Backend\Category\Categorycontroller@store')->name('mycategory');
        Route::get('/manage','App\Http\Controllers\Backend\Category\Categorycontroller@create')->name('category.manage');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@destroy')->name('category.delete');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@edit')->name('category.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@update')->name('category.update');
    });
    Route::group(['prefix'=>'/subcategory'],function(){
        Route::get('/add','App\Http\Controllers\Backend\Subcategories\SubcategoriesController@index')->middleware(['auth'])->name('subcategory.add');
        Route::post('/subcategoryadd','App\Http\Controllers\Backend\Subcategories\SubcategoriesController@store')->middleware(['auth'])->name('mysubcategoryadd');
        Route::get('/manage','App\Http\Controllers\Backend\Subcategories\SubcategoriesController@create')->middleware(['auth'])->name('subcategory.manage');
        // Route::get('/delete/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@destroy')->middleware(['auth'])->name('subcategory.delete');
        // Route::get('/edit/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@edit')->middleware(['auth'])->name('subcategory.edit');
        // Route::post('/update/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@update')->middleware(['auth'])->name('subcategory.update');
    });
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/add','App\Http\Controllers\Backend\Products\ProductController@index')->middleware(['auth'])->name('product.add');
        Route::get('/subcategoryselect','App\Http\Controllers\Backend\Products\ProductController@subcategoryselect')->middleware(['auth']);
        Route::post('/productadd','App\Http\Controllers\Backend\Products\ProductController@store')->middleware(['auth'])->name('myproductadd');
        Route::get('/manage','App\Http\Controllers\Backend\Products\ProductController@create')->middleware(['auth'])->name('product.manage');
        // Route::get('/delete/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@destroy')->middleware(['auth'])->name('subcategory.delete');
        // Route::get('/edit/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@edit')->middleware(['auth'])->name('subcategory.edit');
        // Route::post('/update/{id}','App\Http\Controllers\Backend\Category\Categorycontroller@update')->middleware(['auth'])->name('subcategory.update');
    });

    //route for coupon management

    Route::group(['prefix'=>'/cupon'],function(){
        Route::get('/manage','App\Http\Controllers\Backend\CuponController@index')->name('cupon');
        // Route::post('/add','App\Http\Controllers\Backend\CuponController@store')->name('add.cupon');
    });
    //Route::post('/addcupon','App\Http\Controllers\Backend\CuponController@store')->name('add.cupon');

   
});
Route::post('/addcupon','App\Http\Controllers\Backend\CuponController@store');
Route::get('/showcupon','App\Http\Controllers\Backend\CuponController@create');
Route::get('/deletecupon/{id}','App\Http\Controllers\Backend\CuponController@destroy');

require __DIR__.'/auth.php';
