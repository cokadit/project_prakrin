<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Team;

class RatriController extends Controller
{
    public function index()
    {
        $project = Project::all();
        

        return view('ratri.index',compact('project'));
    }

    public function slider()
    {
        $team = Team::all();

        return view('ratri.slider',compact('team'));
    }
}
