<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;
use App\Models\Hobby_category;
use App\Models\Hobby_tag;

class HobbyEditController extends Controller
{
    public function __invoke(Hobby $hobby)
    {
        $categories = Hobby_category::all();
        $tags = Hobby_tag::all();
        return view('hobby.edit', compact(['hobby', 'categories', 'tags']));

    }

}
