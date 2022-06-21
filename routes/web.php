<?php



use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;


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

Route::get('/', function () {
    return view('home' , [
        "title" => "home",
        "active" => "home",
        "template" => true
    ]);
});

Route::get('/home', function () {
    return view('home' , [
        "title" => "home",
        "active" => "home",
        "template" => true
    ]);
});

Route::get('/posts', function () {
    return view('posts' , [
        "title" => "posts",
        "template" => true
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "about" ,
        "name" => "Zaidan Noor Irfan" ,
        "image" => "foto.png" ,
        "prodi" => "Informatika",
        "active" => "about",
        "template" => true
    ]);
});




Route::get('/posts', [PostController::class , 'index']);

Route::get('/posts/{post:slug}', [PostController::class , 'show']);

Route::get('/categories' , function(){
    return view('categories' , [
        "title" => 'Category' ,
        "subJudul" => 'Post Category',
        "konten" => Category::all(),
        "active" => "posts",
        "template" => true
    ]);
});

Route::get('/categories/{category:slug}' , function(Category $category){
    return view('posts' , [
        "title" => 'category : ' . $category->name ,
        "konten" => $category->posts->load('user' , 'category') ,
        "subJudul" => 'Category : ' . $category->name,
        "active" => "posts",
        "template" => true
    ]);
});

Route::get('/authors' , function(User $user){
    return view('authors' , [
        "title" => 'Author' ,
        "subJudul" => 'Post Authors',
        "konten" => User::all(),
        "active" => "posts",
        "template" => true
        
    ]);
});

Route::get('/authors/{user:username}' , function(User $user){
    return view('posts' , [
        "title" => $user->username ,
        "konten" => $user->posts->load('category' ,'user'),
        "subJudul" => 'Author : ' . $user->name,
        "active" => "posts",
        "template" => true
    ]);
});

Route::get('/login' , [LoginController::class, 'index']);

Route::get('/regis', [RegisController::class, 'index']);

