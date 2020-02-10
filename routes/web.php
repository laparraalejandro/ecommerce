<?php

use Gloudemans\Shoppingcart\Facades\Cart;

//Route::view('/', 'landing-page');
Route::get('/','LandingPageController@index')->name('landing-page');

//Route::view('/shop', 'shop');
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

//Route::view('/product', 'product');
//Route::view('/cart', 'cart');
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}','CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}','SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}','SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('empty',function() {
     Cart::instance('saveForLater')->destroy();
 });


Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
