<?php

namespace App\Http\Controllers\Admin\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pet\IndexPetFilterRequest;
use App\Models\Kind;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Http\Request;

class EditAdminPetController extends Controller
{
    public function __invoke(Pet $pet)
    {
        $pets = Pet::paginate();
        $posts = Post::paginate();
        $kinds = Kind::all();
        return view('admin.pet.edit', compact(['pets', 'posts', 'kinds', 'pet']));
    }
}
