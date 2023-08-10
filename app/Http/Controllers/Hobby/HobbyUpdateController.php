<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;

class HobbyUpdateController extends Controller
{
    public function __invoke(Hobby $hobby)
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

        $hobby->update($data);
        $hobby = $hobby->fresh();
        $hobby->hobby_tags()->sync($tags);
        return redirect()->route('hobby.show', $hobby->id);
    }

}
