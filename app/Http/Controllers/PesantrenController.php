<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesantrenController extends Controller
{
    //
    public function index($id)
    {
        $response = Http::get("https://api-pesantren-indonesia.vercel.app/pesantren/{$id}.json");
        $pesantren = $response->json();

        return view('pesantren', compact('pesantren'));
    }
}
