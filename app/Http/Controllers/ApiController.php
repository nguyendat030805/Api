<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getData()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = $response->json();
        
        return view('index')->with('data', $data);
    }

    
}
