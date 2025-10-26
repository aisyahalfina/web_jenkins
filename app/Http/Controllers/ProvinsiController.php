<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProvinsiController extends Controller
{
    //
    public function index()
    {
        $response = Http::get('https://api-pesantren-indonesia.vercel.app/provinsi.json');
        $provinsi = $response->json();

        return view('provinsi', compact('provinsi'));
    }
}
