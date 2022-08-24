<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Person;

class DeleteController extends Controller
{
    public function __invoke(Person $person)
    {
        $person->delete();

        // После удаления возвращаем метод response([]) с пустым массивом внутри
        return response([]);
    }
}
