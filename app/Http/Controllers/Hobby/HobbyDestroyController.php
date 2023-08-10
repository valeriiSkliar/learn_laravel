<?php

namespace App\Http\Controllers\Hobby;
use App\Http\Controllers\Controller;
use App\Models\Hobby;

class HobbyDestroyController extends Controller
{
    public function __invoke(Hobby $hobby)
    {
        $hobby->delete();
        return redirect()->route('hobby.index');
    }

}
