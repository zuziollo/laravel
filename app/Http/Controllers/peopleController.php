<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class peopleController extends Controller
{
    public function createPerson(Request $request): \Illuminate\Http\JsonResponse
    {
        $person = People::create($request->all());

        return response()->json($person);
    }

    public function getPerson(int $id): \Illuminate\Http\JsonResponse
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json([
                'message' => 'Person not found'
            ], 404);
        }

        return response()->json($person);
    }

    public function updatePerson(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json([
                'message' => 'Person not found'
            ], 404);
        }

        $person->update($request->all());

        return response()->json($person);
    }

    public function deletePerson($id): \Illuminate\Http\JsonResponse
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json([
                'message' => 'Person not found'
            ], 404);
        }
    
        $person->delete();
    
        return response()->json([
            'message' => 'Person deleted successfully'
        ]);
    }

    public function getAll(): \Illuminate\Http\JsonResponse
    {
        return response()->json(People::get());
    }

}
