<?php

namespace App\Http\Controllers;
use App\Models\Dosen2;
use Illuminate\Http\Request;

class Dosen2Controller extends Controller
{
    public function index()
    {
        return view('dosen');
    }

    public function index3()
    {
        $dosen2 = Dosen2::all();

        return view('dosen2', [
            'dosen2' => $dosen2
        ]);
    }
}
