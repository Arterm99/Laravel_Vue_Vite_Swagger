<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\People;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, People $people)
    {
        $data = $request->validated();
        $people->update($data);
        return redirect()->route('people.show', compact('people'));
    }
}
