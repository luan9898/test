<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('greeting', function () {
    return view('welcome', ['name' => 'Samantha']);
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function(){
    echo('hello');
});
Route::get('/luan', function(){
    return view('welcome');
});
Route::get('call-view', function(){
    return view('home');
 });
 
//  Route::get('call-controller','homecontroller@index');
Route::get('a/{name}/{age}','homecontroller@index')->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
Route::get('hello', function(){
    return view('admin.login');

});
Route::get('/home', 'homecontroller@index');
route::get('hdl','homecontroller@showinfo');
route::get('url/full',function(){
    return URL::full();
});
route::get('url/asset',function(){
    return URL::asset('css/mystyle.css');
});
// route::get('schema/create',function(){
//     Schema::create('diemthi',function($table){
//         $table->increments('id');
//         $table->string('monhoc', 100);
//         $table->integer('diem');
//         $table->text('ghichu')->nullable();
//         $table->timestamps();
//     });
// });
Route::group(['middleware' => ['auth']], function() {
    return view('welcome');
});
route::get('schema/rename}',function(){
    Schema::rename('diemthi','hocphan');
});
route::get('rename',function(){
    Schema::rename('diemthi','diemthihs');
});
route::get('change',function(){
    Schema::table('demthihs',function($table){
        $table->integer('diem',80)->change();
    });
});
route::get('renam',function(){
    Schema::table('diemthihs',function($table){
        $table->string('monhoc',80)->change();
    });
});
// route::get('creat',function(){
//     Schema::create('products',function($table){
//         $table->increments('id');
//         $table->integer('cate_id')->unsigned();
//         $table->foreign('cate_id')->references('id')->on('demthihs');
//         $table->string('lop', 100);
//         $table->integer('stt');
//         $table->text('ghichu')->nullable();
//         $table->timestamps();
//     });
// });

Route::get('get-form',['uses'=>'handleController@getForm']);
Route::post('handle-form',['uses'=> 'handleController@handleRequest']);
Route::get('file','UploadController@index');
Route::post('file','Uploadcontroller@Upload');
Auth::routes();
Route::get('/users', function () {
    $data=DB::table('users')->select('username','password')->get();
    	print_r($data);
});
route::get('user','UserController1@index');
route::get('user/{id}/delete','UserController1@delete');
route::get('user/{id}/edit','UserController1@edit');
Route::put('update',['uses' => 'UserController1@update']);
Route::get('/search','UserController1@search');
// route::get('creat',function(){
//     Schema::create('Post',function($table){
//         $table->increments('id');
//         $table->string('username', 100);
//         $table->integer('title');
//         $table->text('description');
//         $table->timestamps();
//     });
// });
route::get('creat',function(){
    Schema::create('Post',function($table){
        $table->increments('id');
        $table->string('username', 100);
        $table->integer('title');
        $table->text('description');
        $table->timestamps();
    });
});
route::get('showpost', 'UserController1@showpost');
route::get('post','posts@getPostByUserId')->where(['username']);
route::get('post/{id}/delete','posts@deletePost');
route::get('post/{id}/edit','posts@editPost');
// route::get('/indexx','PagesController@index');;
// route::get('/getUsers','PagesController@getUsers');
// route::post('addUser','PagesController@addUsers');
// route::post('.updateUsers','PagesController@updateUsers');
// route::get('/deleteUser/{id}','PagesController@deleteUsers');
Route::get('/indexx', 'PagesController@index');
Route::get('/getUsers', 'PagesController@getUsers');
Route::post('/addUser', 'PagesController@addUsers');
Route::post('/updateUser', 'PagesController@updateUsers');
Route::get('/deleteUser/{id}', 'PagesController@deleteUsers');
route::post('/login2','LoginController2@getLogin');
?>