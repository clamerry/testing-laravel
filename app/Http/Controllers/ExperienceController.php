<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index() //method default
    {
        return view('dashboard.experiences.index', [
        ]);
    }

    public function show(Experience $exp)
    {
        return view('dashboard.experiences.index', [
            "porto" => $exp
        ]);
    }
}
