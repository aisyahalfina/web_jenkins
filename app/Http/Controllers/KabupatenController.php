<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KabupatenController extends Controller
{
    //
    public function index($id)
    {
        $response = Http::get("https://api-pesantren-indonesia.vercel.app/kabupaten/{$id}.json");
        $kabupaten = $response->json();

        return view('kabupaten', compact('kabupaten'));
    }
}
