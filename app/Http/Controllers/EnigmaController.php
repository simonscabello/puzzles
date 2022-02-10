<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Enigma;


class EnigmaController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Enigma::all()]);
    }

    public function show($id)
    {
        return response()->json(['data' => Enigma::find($id)]);
    }

    public function store(Request $request)
    {
        $enigma = Enigma::create($request->all());

        return response()->json(['data' => $enigma]);
    }
}
