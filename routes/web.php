<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\IndexAdminController;
use App\Http\Controllers\Admin\Pet\EditAdminPetController;
use App\Http\Controllers\Admin\Pet\IndexAdminPetController;
use App\Http\Controllers\Admin\Pet\UpdateAdminPetController;
use App\Http\Controllers\Admin\Post\IndexAdminPostController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Hobby\HobbyCreateController;
use App\Http\Controllers\Hobby\HobbyDestroyController;
use App\Http\Controllers\Hobby\HobbyEditController;
use App\Http\Controllers\Hobby\HobbyIndexController;
use App\Http\Controllers\Hobby\HobbyShowController;
use App\Http\Controllers\Hobby\HobbyStoreController;
use App\Http\Controllers\Hobby\HobbyUpdateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Pet\CreatePetController;
use App\Http\Controllers\Pet\DestroyPetController;
use App\Http\Controllers\Pet\EditPetController;
use App\Http\Controllers\Pet\IndexPetController;
use App\Http\Controllers\Pet\ShowPetController;
use App\Http\Controllers\Pet\StorePetController;
use App\Http\Controllers\Pet\UpdatePetController;
use App\Http\Controllers\Post\CategoryController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//'prefix'=> 'admin'
Route::group(['namespace' => 'Admin'],function() {
    Route::get('/admin', [IndexAdminController::class, '__invoke'])->name('admin.index');
    Route::group(['namespace' => 'Post','prefix'=> 'admin', 'middleware' => 'admin'],function() {
        Route::get('/post', [IndexAdminPostController::class, '__invoke'])->name('admin.post.index');
    });
    Route::group(['namespace' => 'Pets','prefix'=> 'admin'],function() {
        Route::get('/pet', [IndexAdminPetController::class, '__invoke'])->name('admin.pet.index');
        Route::get('/pet/{pet}', [EditAdminPetController::class, '__invoke'])->name('admin.pet.edit');
        Route::patch('/pet/{pet}', [UpdateAdminPetController::class, '__invoke'])->name('admin.pet.update');
    });
});

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/', [HomeController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

//posts
Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', [IndexController::class, '__invoke'])->name('post.index');
    Route::get('/posts/create/', [CreateController::class, '__invoke'] )->name('post.create');
    Route::post('/posts', [StoreController::class, '__invoke'] )->name('post.store');
    Route::get('/posts/{post}', [ShowController::class, '__invoke'] )->name('post.show');
    Route::get('/posts/{post}/edit', [EditController::class, '__invoke'] )->name('post.edit');
    Route::patch('/posts/{post}', [UpdateController::class, '__invoke'] )->name('post.update');
    Route::delete('/posts/{post}', [DestroyController::class, '__invoke'] )->name('post.delete');
////category
    Route::get('posts/categories/{category}', [CategoryController::class, '__invoke'])->name('category.index');
});


//hobbies
Route::group(['namespace'=>'Hobby'], function () {
    Route::get('/hobbies', [HobbyIndexController::class, '__invoke'])->name('hobby.index');
    Route::get('/hobbies/create/', [HobbyCreateController::class, '__invoke'])->name('hobby.create');
    Route::post('/hobbies', [HobbyStoreController::class, '__invoke'])->name('hobby.store');
    Route::get('/hobbies/{hobby}', [HobbyShowController::class, '__invoke'])->name('hobby.show');
    Route::get('/hobbies/{hobby}/edit', [HobbyEditController::class, '__invoke'])->name('hobby.edit');
    Route::patch('/hobbies/{hobby}', [HobbyUpdateController::class, '__invoke'])->name('hobby.update');
    Route::delete('/hobbies/{hobby}', [HobbyDestroyController::class, '__invoke'])->name('hobby.delete');
});


//pets
Route::group(['namespace'=>'Pet'], function () {
    Route::get('/pets', [IndexPetController::class, '__invoke'])->name('pet.index');
    Route::get('/pets/create/', [CreatePetController::class, '__invoke'])->name('pet.create');
    Route::post('/pets', [StorePetController::class, '__invoke'])->name('pet.store');
    Route::get('/pets/{pet}', [ShowPetController::class, '__invoke'])->name('pet.show');
    Route::get('/pets/{pet}/edit', [EditPetController::class, '__invoke'])->name('pet.edit');
    Route::patch('/pets/{pet}', [UpdatePetController::class, '__invoke'])->name('pet.update');
    Route::delete('/pets/{pet}', [DestroyPetController::class, '__invoke'])->name('pet.delete');
});




//Route::get('/posts/update/', [PostController::class, 'update']);
//Route::get('/posts/delete/', [PostController::class, 'delete']);
//Route::get('/posts/restore/', [PostController::class, 'restore']);
//Route::get('/posts/first_or_create/', [PostController::class, 'firstOrCreate']);
//Route::get('/posts/update_or_create/', [PostController::class, 'updateOrCreate']);
//Route::get('/my_hobby', [MyHobbyController::class, 'index']);
//Route::get('my_job', [MyWorkPageController::class,'index']);
//Route::get('my_daughter', [MyDaughterPageController::class, 'index']);
//Route::get('my_city', [MyCityPage::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
