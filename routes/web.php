<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Hobby\HobbyCreateController;
use App\Http\Controllers\Hobby\HobbyDestroyController;
use App\Http\Controllers\Hobby\HobbyEditController;
use App\Http\Controllers\Hobby\HobbyIndexController;
use App\Http\Controllers\Hobby\HobbyShowController;
use App\Http\Controllers\Hobby\HobbyStoreController;
use App\Http\Controllers\Hobby\HobbyUpdateController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PetController;
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


Route::get('/admin', [MainController::class, 'admin'])->name('main.admin');
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/', [MainController::class, 'index'])->name('main.index');
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
Route::get('/pets', [PetController::class, 'index'])->name('pet.index');
Route::get('/pets/create/', [PetController::class, 'create'])->name('pet.create');
Route::post('/pets', [PetController::class, 'store'])->name('pet.store');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pet.show');
Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pet.edit');
Route::patch('/pets/{pet}', [PetController::class, 'update'])->name('pet.update');
Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pet.delete');



//Route::get('/posts/update/', [PostController::class, 'update']);
//Route::get('/posts/delete/', [PostController::class, 'delete']);
//Route::get('/posts/restore/', [PostController::class, 'restore']);
//Route::get('/posts/first_or_create/', [PostController::class, 'firstOrCreate']);
//Route::get('/posts/update_or_create/', [PostController::class, 'updateOrCreate']);
//Route::get('/my_hobby', [MyHobbyController::class, 'index']);
//Route::get('my_job', [MyWorkPageController::class,'index']);
//Route::get('my_daughter', [MyDaughterPageController::class, 'index']);
//Route::get('my_city', [MyCityPage::class, 'index']);