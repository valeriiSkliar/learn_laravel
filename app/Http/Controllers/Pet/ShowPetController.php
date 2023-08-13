<?php

namespace App\Http\Controllers\Pet;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class ShowPetController extends BasePetController
{
    public function __invoke(Pet $pet)
    {
        return view('pet.show', compact('pet'));
    }
}
