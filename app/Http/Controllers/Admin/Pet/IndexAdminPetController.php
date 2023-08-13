<?php

namespace App\Http\Controllers\Admin\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pet\IndexPetFilterRequest;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexAdminPetController extends Controller
{
    public function __invoke(IndexPetFilterRequest $request)
    {
//        $data = $request->validated();
        $pets = Pet::paginate();
        $posts = Post::paginate();
        return view('admin.pet.index', compact(['pets', 'posts']));
    }
}
