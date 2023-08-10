<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Hobby;
use App\Models\Hobby_category;
use App\Models\Hobby_tag;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = Hobby::all();
//        $hobbies = Hobby::find(3);
//        $category = Hobby_category::all();
//        $category = Hobby_category::find(2);
//        $tags = Hobby_tag::all();
//        $tags = Hobby_tag::find(1);
//        dd($hobbies->hobby_category);
//        dd($hobbies->hobby_tags);
//        dd($category->hobbies);
//        dd($tags->hobbies);
//        dd($tags);
        return view('hobby.index', compact('hobbies'));
    }

    public function create()
    {
        return view('hobby.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'image' => 'string',
            'day_count' => 'integer',
        ]);
        Hobby::create($data);
        return redirect()->route('hobby.index');
    }

    public function show(Hobby $hobby)
    {
        return view('hobby.show', compact('hobby'));
    }

    public function edit(Hobby $hobby)
    {
        return view('hobby.edit', compact('hobby'));
    }

    public function update(Hobby $hobby)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'image' => 'string',
            'day_count' => 'integer',
        ]);

        $hobby->update($data);
        return redirect()->route('hobby.show', $hobby->id);
    }

    public function destroy(Hobby $hobby)
    {
        $hobby->delete();
        return redirect()->route('hobby.index');
    }
}
