<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;
use App\Models\Hobby_category;
use App\Models\Hobby_tag;

class HobbyCreateController extends Controller
{
    public function __invoke()
    {
        $categories = Hobby_category::all();
        $tags = Hobby_tag::all();

        return view('hobby.create', compact(['categories', 'tags']));
    }

}
