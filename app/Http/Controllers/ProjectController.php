<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('finish','未完成')->orderBy('weight','desc')->get();
        return view('project', compact('projects'));
    }
}
