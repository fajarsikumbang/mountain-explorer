<?php

namespace App\Http\Controllers;

use App\Models\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index()
    {
        return response()->json(Mountain::all());
    }

    public function show($id)
    {
        $mountain = Mountain::find($id);
        if ($mountain) {
            return response()->json($mountain);
        }
        return response()->json(['message' => 'Mountain not found'], 404);
    }
}

