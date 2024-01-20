<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\N8N;
use Illuminate\Http\Request;

class N8NController extends Controller
{
    public function index()
    {
        return N8N::all();
    }
}
