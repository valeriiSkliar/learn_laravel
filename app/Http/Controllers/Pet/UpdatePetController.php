<?php

namespace App\Http\Controllers\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pet\UpdatePetRequest;
use App\Models\Kind;
use App\Models\Pet;
use Illuminate\Http\Request;

class UpdatePetController extends BasePetController
{
    public function __invoke(UpdatePetRequest $request, Pet $pet): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $this->petService->update($data, $pet);
        return redirect()->route('pet.show', $pet->id);
    }
}
