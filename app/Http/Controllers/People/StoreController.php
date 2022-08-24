<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $data['url_image'] = Storage::disk('public')->put('/images', $data['url_image']);
        Person::create($data);

        return redirect()->route('people.index');
    }
}
