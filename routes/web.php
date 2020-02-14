<?php

use Gloudemans\Shoppingcart\Facades\Cart;

//Landing Page
//Route::view('/', 'landing-page');
Route::get('/','LandingPageController@index')->name('landing-page');


//Crud-landing
Route::get('/crud-landing','CrudLandingController@index')->name('crud-landing.index');

//Shop Page
//Route::view('/shop', 'shop');
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

//Route::view('/product', 'product');
//Route::view('/cart', 'cart');

//Cart Page
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}','CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}','SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}','SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');


//Utility (empty cart/save for later)
Route::get('empty',function() {
     Cart::instance('default')->destroy();
 });


 //Checkoyut Page
//Route::view('/checkout', 'checkout');
Route::get('/checkout','CheckoutController@index')->name('checkout.index');




Route::view('/thankyou', 'thankyou');
