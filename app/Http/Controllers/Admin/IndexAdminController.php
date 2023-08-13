<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate();
        $pets = Pet::paginate();
        return view('admin.index', compact(['posts', 'pets']));
    }
}
