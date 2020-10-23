<?php


//use 
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

// Route::get('/', 'PageController@home');

// Route::get('/about', 'PageController@about');

// Route::get('/contact', 'PageController@contact');

// Route::get('/', function() {
//     $articles = App\Article::latest('id')->get();

//     return view('welcome', [
//         'articles' => $articles
//     ]);
        
// });

//Route::get('/','PageController@index');


// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/about', function() {
    return view('about');
});

Route::get('/post', function() {
    return view('post');
});

Route::get('/article/{article}', 'ArticleController@index');

Route::get('/contact', function() {
    return view('contact');
});
Auth::routes();
Route::get('/home', 'HomeController1@index');

Route::get('/manage', 'HomeController1@manage')->name('manage');
Route::get('/manage/addArticle','HomeController1@add');
Route::post('/addArticle/create','HomeController1@create');
Route::get('/manage/editArticle/{id}','HomeController1@edit');
Route::post('/editArticle/update/{id}','HomeController1@update');
Route::get('/manage/delete/{id}','HomeController1@delete');