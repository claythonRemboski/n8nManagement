<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gitlab;
use Illuminate\Http\Request;

class GitlabController extends Controller
{
    public function index()
    {
        return Gitlab::all();
    }
}
