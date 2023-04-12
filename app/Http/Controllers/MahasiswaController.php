<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa,
        ]);
    }

    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully create Mahasiswa',
            'data' => $mahasiswa,
        ]);
    }

    public function show($uuid)
    {
        $mahasiswa = Mahasiswa::findOrFail($uuid);

        return response()->json([
            'status' => 'success',
            'data' => $mahasiswa
        ]);
    }

    public function update(Request $request, $uuid)
    {
        $mahasiswa = Mahasiswa::findOrFail($uuid);
        $mahasiswa->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully update Mahasiswa',
        ]);
    }

    public function destroy($uuid)
    {
        $mahasiswa = Mahasiswa::findOrFail($uuid);
        $mahasiswa->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully delete Mahasiswa',
        ]);
    }
}
