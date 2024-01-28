<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JiraResource;
use App\Models\Jira;
use Illuminate\Http\Request;

class JiraController extends Controller
{
    public function index()
    {
        $issues = Jira::paginate();
        return JiraResource::collection($issues);
    }
}
