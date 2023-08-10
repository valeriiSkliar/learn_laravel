<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;
use App\Models\Hobby_category;

class HobbyStoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'image' => 'string',
            'day_count' => 'integer',
            'hobby_category_id' => 'integer',
            'hobby_tags' => '',
        ]);
        $tags = $data['hobby_tags'];
        unset($data['hobby_tags']);

        $hobby = Hobby::create($data);
        $hobby->hobby_tags()->attach($tags);

        return redirect()->route('hobby.index');
    }

}
