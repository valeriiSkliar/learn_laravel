<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\IndexFilterRequest;
use App\Models\Category;
use App\Models\Pet;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexAdminPostController extends Controller
{
    public function __invoke(IndexFilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(25);
        $categories = Category::all();
        $pets = Pet::paginate();

        return view('admin.post.index',compact(['posts', 'categories', 'pets']));
    }
}
