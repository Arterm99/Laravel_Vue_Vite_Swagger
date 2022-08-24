<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\People;

class DeleteController extends Controller
{
    public function __invoke(People $people)
    {
        $people->delete();

        // После удаления возвращаем метод response([]) с пустым массивом внутри
        return redirect()->route('people.index');
    }
}
