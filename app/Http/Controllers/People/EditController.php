<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Person;

class EditController extends Controller
{
    public function __invoke(UpdateRequest $request, Person $person)
    {
        $data = $request->validated();

        $person->update($data);

        return response([]);
    }
}
