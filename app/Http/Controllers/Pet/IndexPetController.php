<?php

namespace App\Http\Controllers\Pet;

use App\Models\Pet;

class IndexPetController extends BasePetController
{
    public function __invoke()
    {
        $pets = Pet::paginate(6);
        return view('pet.index', compact('pets'));
    }
}
