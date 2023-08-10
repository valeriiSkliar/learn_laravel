<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;

class HobbyShowController extends Controller
{
    public function __invoke(Hobby $hobby)
    {
        return view('hobby.show', compact('hobby'));
    }

}
