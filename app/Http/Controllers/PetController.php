<?php

namespace App\Http\Controllers;

use App\Models\Pet; // El modelo de Pet
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all(); // Obtiene todas las mascotas
        return view('pets.index', compact('pets')); // Pasa las mascotas a la vista
    }
}

