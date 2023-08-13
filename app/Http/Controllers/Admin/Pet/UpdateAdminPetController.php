<?php

namespace App\Http\Controllers\Admin\Pet;

use App\Http\Controllers\Pet\BasePetController;
use App\Http\Requests\Pet\UpdatePetRequest;
use App\Models\Pet;

class UpdateAdminPetController extends BasePetController
{
    public function __invoke(UpdatePetRequest $request, Pet $pet): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $this->petService->update($data, $pet);
        return redirect()->route('admin.pet.index', $pet->id);
    }
}
