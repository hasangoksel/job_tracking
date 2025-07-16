<?php

namespace Modules\Personal\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Personal\Http\Requests\StorePersonalRequest;
use Modules\Personal\Services\PersonalService;

class PersonalController extends Controller
{
    public function index()
    {
        return response()->json(['personal' => ['Ali', 'Veli']]);
    }

    public function store(StorePersonalRequest $request, PersonalService $personalService)
    {
        $personal = $personalService->create($request->validated());

        return response()->json($personal);
    }
}