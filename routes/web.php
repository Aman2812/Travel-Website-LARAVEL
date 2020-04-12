<?php

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

//Destination 1 and its hotels

Route::get('/Destination1.blade.php', function () {
    return view('Destination1');
});

Route::get('/Destination_1_hotel_1.blade.php', function () {
    return view('Destination_1_hotel_1');
});

Route::get('/Destination_1_hotel_2.blade.php', function () {
    return view('Destination_1_hotel_2');
});

Route::get('/Destination_1_hotel_3.blade.php', function () {
    return view('Destination_1_hotel_3');
});

Route::get('/Destination_1_hotel_4.blade.php', function () {
    return view('Destination_1_hotel_4');
});



//Destination 2 and its hotels

Route::get('/Destination2.blade.php', function () {
    return view('Destination2');
});

Route::get('/Destination_2_hotel_1.blade.php', function () {
    return view('Destination_2_hotel_1');
});

Route::get('/Destination_2_hotel_2.blade.php', function () {
    return view('Destination_1_hotel_2');
});

Route::get('/Destination_2_hotel_3.blade.php', function () {
    return view('Destination_2_hotel_3');
});

Route::get('/Destination_2_hotel_4.blade.php', function () {
    return view('Destination_2_hotel_4');
});


//Destination 3 and its hotels

Route::get('/Destination3.blade.php', function () {
    return view('Destination3');
});

Route::get('/Destination_3_hotel_1.blade.php', function () {
    return view('Destination_3_hotel_1');
});

Route::get('/Destination_3_hotel_2.blade.php', function () {
    return view('Destination_3_hotel_2');
});

Route::get('/Destination_3_hotel_3.blade.php', function () {
    return view('Destination_3_hotel_3');
});

Route::get('/Destination_3_hotel_4.blade.php', function () {
    return view('Destination_3_hotel_4');
});


//Destination 4 and its hotels

Route::get('/Destination4.blade.php', function () {
    return view('Destination4');
});

Route::get('/Destination_4_hotel_1.blade.php', function () {
    return view('Destination_4_hotel_1');
});

Route::get('/Destination_4_hotel_2.blade.php', function () {
    return view('Destination_4_hotel_2');
});

Route::get('/Destination_4_hotel_3.blade.php', function () {
    return view('Destination_4_hotel_3');
});

Route::get('/Destination_4_hotel_4.blade.php', function () {
    return view('Destination_4_hotel_4');
});


//Destination 5 and its hotels

Route::get('/Destination5.blade.php', function () {
    return view('Destination5');
});

Route::get('/Destination_5_hotel_1.blade.php', function () {
    return view('Destination_5_hotel_1');
});

Route::get('/Destination_5_hotel_2.blade.php', function () {
    return view('Destination_5_hotel_2');
});

Route::get('/Destination_5_hotel_3.blade.php', function () {
    return view('Destination_5_hotel_3');
});

Route::get('/Destination_5_hotel_4.blade.php', function () {
    return view('Destination_5_hotel_4');
});


//Destination 6 and its hotels

Route::get('/Destination6.blade.php', function () {
    return view('Destination6');
});

Route::get('/Destination_6_hotel_1.blade.php', function () {
    return view('Destination_6_hotel_1');
});

Route::get('/Destination_6_hotel_2.blade.php', function () {
    return view('Destination_6_hotel_2');
});

Route::get('/Destination_6_hotel_3.blade.php', function () {
    return view('Destination_6_hotel_3');
});

Route::get('/Destination_6_hotel_4.blade.php', function () {
    return view('Destination_6_hotel_4');
});





Route::get('/', function () {
    return view('mainPage');
});


Route::get('/', function () {
    return view('mainPage');
});


Route::get('/cart.blade.php', function () {
    return view('cart');
});

Route::get('/signup.blade.php', function () {
    return view('signup');
});



Route::get('/Login2.blade.php', function () {
    return view('Login2');
});

Route::get('/Booking.blade.php', function () {
    return view('Booking');
});

Route::get('/Success.blade.php', function () {
    return view('Success');
});



Route::get('/mainPage.blade.php', function () {
    return view('mainPage');
});

Route::get('/homepage.blade.php', function () {
    return view('homepage');
});
 
Route::get('/post', function () {
    return view('post');
});
Route::get('/class', function () {
    return view('class');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/Aboutus.blade.php', function () {
    return view('Aboutus');
});



Route::get('/signup','newController@signup');
Route::get('/login','newController@Login2');
Route::get('/destination1','newController@destination1');
Route::get('/destination2','newController@destination2');
Route::get('/destination3','newController@destination3');
Route::get('/destination4','newController@destination4');
Route::get('/destination5','newController@destination5');
Route::get('/destination6','newController@destination6');


Route::get('/hotel1','newController@hotel1');
Route::get('/hotel2','newController@hotel2');
Route::get('/hotel3','newController@hotel3');
Route::get('/hotel4','newController@hotel4');
Route::get('/hotel5','newController@hotel5');
Route::get('/hotel6','newController@hotel6');
Route::get('/hotel7','newController@hotel7');
Route::get('/hotel8','newController@hotel8');
Route::get('/hotel9','newController@hotel9');
Route::get('/hotel10','newController@hotel10');
Route::get('/hotel11','newController@hotel11');
Route::get('/hotel12','newController@hotel12');



Route::get('/tours','newController@tours');
Route::get('/aboutus','newController@about');
Route::get('/venues','newController@venues');
Route::get('/homepage','newController@homepage');
Route::get('/mainpage','newController@mainPage');
Route::get('/cart','newController@cart');
Route::get('/success','newController@success');



Route::get('/signup/store','newController@store1');










Route::get('/contact','newController@contact');

Route::get('/post/{name}','newController@show_data');

Route::get('/employee','newController@getEmployee');
//Route::get('/employee/{id}','newController@getEmployee');


Route::get('/post','newController@getPosts');


Route::get('/show/{num}/{name}',function($num,$name){
    return "The number, you've entered : ".$num." and the name is : ".$name;
});

Route::get('/blog/cricket/post/admin',array('as'=>'blog.cricket',function(){

    $url=route('blog.cricket');

    return "Not the Url is :".$url;
}));






//Route::get('/post/{empid}/{empname}/{empsal}','PostsController@show_details');

//Route::get('/post/{id}','newController@index');



//Route::resource('/post','PostsController');


//Route::get('/post/{id}/{name}/{password?}','newController@show_post');
//you can't make a parameter optional in between

//Route::get('/post','newController@show_data');



/*Route::get('/post/{id}', function ($id) {

    return "Hello This is About page".$id;
});*/



/*
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/Tutorials', function () {
    return view('Tutorials');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/moretutorials', function () {
    return view('moretutorials');
});

Route::get('/ca2', function () {
    return view('ca2');
});

Route::get('/post', function () {
    return view('post');
});





Route::get('/post/{$id}','PostsController@show_data');

Route::get('/post/{id}','PostsController@index');


*/

?>


