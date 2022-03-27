<?php

namespace App\Http\Controllers;

use App\Models\Experience;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method utama
        $experiences = Experience::where('user_id', auth()->user()->id)->get();
        // dd($experiences);
        return view('mahasiswa.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.experiences.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->detail), 100);

        Experience::create($validatedData);

        return redirect('/mahasiswa/experiences')->with('success', 'New experience has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
        return view('mahasiswa.experiences.show', [
            'experiences' => $experience
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
        return view('mahasiswa.experiences.edit', [
            'experiences' => $experience

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
        $rules = [
            'start_date' => 'required',
            'end_date' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->detail), 100);

        Experience::where('id', $experience->id)
            ->update($validatedData);

        return redirect('/mahasiswa/experiences')->with('success', 'Experience has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
        Experience::destroy($experience->id);
        return redirect('/mahasiswa/experiences')->with('success', 'Experience has been deleted!');
    }
}
