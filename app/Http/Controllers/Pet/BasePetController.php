<?php

namespace App\Http\Controllers\Pet;
use App\Http\Controllers\Controller;
use App\Services\Pet\PetService;
class BasePetController extends Controller
{
    public PetService $petService;

    public function __construct(PetService $service)
    {
        $this->petService = $service;
    }
}
