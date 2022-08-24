<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Person;

class IndexController extends Controller
{
    public function __invoke()
    {
        $peoples = Person::all();
        // compact позволяет сделать доступными любые массивы, данные, аналогичен массиву: 'table' => $table
        return view('people.index', compact( 'peoples'));
    }
}
