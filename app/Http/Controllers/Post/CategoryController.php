<?php

namespace App\Http\Controllers\Post;

use App\Models\Category;

class CategoryController extends BaseController
{
    public function __invoke(Category $category)
    {

        $categories = Category::find($category);
        $posts = $category->posts;

        return view('post.index', compact(['posts', 'categories']));

    }}
