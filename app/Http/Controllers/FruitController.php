<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function Fruits()
    {
        return view ('Fruit.fruits');
    }
}
