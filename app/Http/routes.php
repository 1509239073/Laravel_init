<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// use Illuminate\Support\Facades\Crypt;
Route::get('/', function () {
    return view('welcome');
});
// 显示创建博客文章表单...
Route::get('post/create', 'PostController@create');
// 存储新的博客文章...
Route::post('post', 'PostController@store')->name('posts.store');
// Route::get('/', function () {
//     return view('greeting', ['name' => '学院君']);
// });
Route::get('user/{id}', 'UserController@show');
Route::get('create', 'UserController@create');
// Route::get('hello', function () {
//     return 'Hello, Welcome to LaravelAcademy.org';
// });
// Route::match(['get', 'post'], 'foo', function () {
//     return 'This is a request from get or post';
// });
// Route::get('/form_without_csrf_token', function (){
//     return '<form method="POST" action="/Laravel/public/hello_from_form"><button type="submit">提交</button></form>';
// })->middleware('web');
// Route::get('/form_with_csrf_token', function () {
//     return '<form method="POST" action="/Laravel/public/hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
// })->middleware('web');

// Route::match(['get', 'post'],'/hello_from_form', function (){
//    return 'hello laravel!';
// });


Route::auth();

Route::get('/home', 'HomeController@index');