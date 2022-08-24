<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;

class ShowController extends Controller
{
    public function __invoke(Person $person)
    {
        // Вызываем $person через ресурс
        return new PersonResource($person);
    }
}
