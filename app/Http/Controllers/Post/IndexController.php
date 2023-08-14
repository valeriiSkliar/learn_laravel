<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\IndexFilterRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Container\BindingResolutionException;

class IndexController extends BaseController
{
    /**
     * @throws BindingResolutionException
     * @throws AuthorizationException
     */
    public function __invoke(IndexFilterRequest $request)
    {
//        $this->authorize('view', auth()->user());
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(5);
        $categories = Category::all();

        return view('post.index', compact(['posts', 'categories']));
    }
}
