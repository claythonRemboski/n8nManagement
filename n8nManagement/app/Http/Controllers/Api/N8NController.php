<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\N8NResource;
use App\Models\N8N;
use Illuminate\Http\Request;

class N8NController extends Controller
{
    public function index()
    {
        $workflows = N8N::paginate();
        return N8NResource::collection($workflows);
    }
}
