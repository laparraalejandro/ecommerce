<?php

use Gloudemans\Shoppingcart\Facades\Cart;


//session destroy - use to prove on deleting items from product manager
Route::get('/destroy',function(){
    return Session::flush();
});



//Landing Page
//Route::view('/', 'landing-page');
Route::get('/','LandingPageController@index')->name('landing-page');


//Crud-landing
Route::get('/crud/product-manager','ProductManagerController@index')->name('product-manager.index');
Route::post('/crud/product-manager','ProductManagerController@visible')->name('product-manager.visible');
Route::delete('/crud/product-manager/{product}','ProductManagerController@destroy')->name('product-manager.destroy');

Route::get('/crud/product-manager/new','ProductManagerChangeController@index')->name('product-manager-change.index');
Route::get('/crud/product-manager/{product}','ProductManagerChangeController@show')->name('product-manager-change.show');
Route::post('/crud/product-manager/new','ProductManagerChangeController@create')->name('product-manager-change.create');
Route::post('/crud/product-manager/{product}','ProductManagerChangeController@update')->name('product-manager-change.update');

 
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
