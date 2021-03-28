<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Designer;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $character = Character::all();
        return view('list', ['character' => $character]);
    }

    public function character($id)
    {
        $character = Character::findOrFail($id);
        return view('character', ['character' => $character]);
    }

    public function designer($id)
    {
        $designer = Designer::findOrFail($id);
        return view('designer', ['designer' => $designer]);
    }
}
