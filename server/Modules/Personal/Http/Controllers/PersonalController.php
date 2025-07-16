<?php

namespace Modules\Personal\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Personal\Http\Requests\StorePersonalRequest;
use Modules\Personal\Http\Resources\PersonalResource;
use Modules\Personal\Services\PersonalService;
use Modules\Personal\Models\Personal;
class PersonalController extends Controller
{
    public function index()
    {   
        $data = Personal::all();
        if($data->isEmpty()){
            return response()->json(['success' => false, 'message' => 'Çalışan kaydı bulunamadı.']);
        }
        return PersonalResource::collection($data);
    }

    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        return new PersonalResource($personal);
    }

    public function store(StorePersonalRequest $request, PersonalService $personalService)
    {
        $personal = $personalService->create($request->validated());
        return response()->json($personal);
    }
}