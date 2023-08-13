<?php

namespace App\Http\Controllers\Pet;

use App\Models\Pet;

class DestroyPetController extends BasePetController
{
    public function __invoke(Pet $pet): \Illuminate\Http\RedirectResponse
    {
        $pet->delete();
        return redirect()->route('pet.index');
    }
}
