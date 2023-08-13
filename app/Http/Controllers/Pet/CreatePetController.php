<?php

namespace App\Http\Controllers\Pet;

use App\Models\Kind;

class CreatePetController extends BasePetController
{

    public function __invoke()
    {
        $kinds = Kind::all();
        return view('pet.create', compact('kinds'));
    }
}
