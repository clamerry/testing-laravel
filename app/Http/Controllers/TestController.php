<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() //method default
    {
        return view('lte.app');
    }
    
}
