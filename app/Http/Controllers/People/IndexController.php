<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\People;

class IndexController extends Controller
{
    public function __invoke()
    {
        $peoples = People::all();
        // compact позволяет сделать доступными любые массивы, данные, аналогичен массиву: 'table' => $table
        return view('people.index', compact( 'peoples'));
    }
}
