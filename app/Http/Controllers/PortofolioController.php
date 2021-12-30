<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index() //method default
    {
        $title ='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Portofolio category: ' . $category->name;
        }
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = 'Portofolio by ' . $author->name;
        }
           
        
        return view('portofolio', [
            "title" => "" . $title,
            "active" => 'portofolio',
            "portofolio" => Portofolio::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Portofolio $porto)
    {
        return view('porto', [
            "title" => "Single Post",
            "active" => 'portofolio',
            "porto" => $porto
        ]);
    }
}
