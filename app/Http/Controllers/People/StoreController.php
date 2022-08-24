<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\People;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        $data['url_image'] = Storage::disk('public')->put('/images', $data['url_image']);

        People::create($data);

        return redirect()->route('people.index');
    }
}
