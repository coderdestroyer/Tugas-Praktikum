<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dosen');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index2()
    {
        $dosen = Dosen::all();

        return view('dosen', [
            'dosen' => $dosen
        ]);
    }

    
}
