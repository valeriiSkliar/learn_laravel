<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;

class HobbyIndexController extends Controller
{
    public function __invoke()
    {
        $hobbies = Hobby::all();
        return view('hobby.index', compact('hobbies'));
    }

}
