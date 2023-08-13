<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\IndexFilterRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Container\BindingResolutionException;

class IndexController extends BaseController
{
    /**
     * @throws BindingResolutionException
     */
    public function __invoke(IndexFilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(5);
        $categories = Category::all();

        return view('post.index', compact(['posts', 'categories']));
    }
}
