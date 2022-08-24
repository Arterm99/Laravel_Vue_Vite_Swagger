<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Person;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('people.create');
    }
}
