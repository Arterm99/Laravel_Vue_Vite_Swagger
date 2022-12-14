<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\People;

class ShowController extends Controller
{
    public function __invoke(People $people)
    {
        return view('people.show', compact('people'));
    }
}
