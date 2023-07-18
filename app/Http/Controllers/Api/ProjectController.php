<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies')->paginate(3);

        return response()->json([
            'success' => true,
            'results' => $projects,
        ]);
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return response()->json([
            'success' => true,
            'results' => $project,
        ]);
    }
}
