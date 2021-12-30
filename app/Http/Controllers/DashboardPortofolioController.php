<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portofolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('dashboard.portofolios.index', [
            'portofolios' => Portofolio::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.portofolios.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:portofolios',
            'image' => 'image|file|max:20480',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Portofolio::create($validatedData);

        return redirect('/dashboard/portofolios')->with('success', 'New portofolio has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        return view('dashboard.portofolios.show', [
            'porto' => $portofolio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('dashboard.portofolios.edit', [
            'porto' => $portofolio,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:20480',
            'body' => 'required'
        ];

        if ($request->slug != $portofolio->slug) {
            $rules['slug'] = 'unique:portofolios';
        }
        
        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Portofolio::where('id', $portofolio->id)
            ->update($validatedData);

        return redirect('/dashboard/portofolios')->with('success', 'Portofolio has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        if($portofolio->image) {
            Storage::delete($portofolio->image);
        }
        Portofolio::destroy($portofolio->id);
        return redirect('/dashboard/portofolios')->with('success', 'Portofolio has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Portofolio::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
