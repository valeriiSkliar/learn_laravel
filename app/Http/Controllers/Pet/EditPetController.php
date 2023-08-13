<?php

namespace App\Http\Controllers\Pet;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use App\Models\Pet;
use Illuminate\Http\Request;

class EditPetController extends BasePetController
{
    public function __invoke(Pet $pet)
    {
        $kinds = Kind::all();
        return view('pet.edit', compact(['pet', 'kinds']));
    }
}
