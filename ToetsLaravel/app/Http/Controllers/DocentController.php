<?php

namespace App\Http\Controllers;

use App\Models\Docent;
use Illuminate\Http\Request;

class DocentController extends Controller
{
    public function index()
    {
        $docenten = Docent::with('vakken')->orderBy('naam')->get();
        return view('docenten.index', compact('docenten'));
    }
}
