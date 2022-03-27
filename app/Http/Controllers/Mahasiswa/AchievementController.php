<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method utama
        $achievements = Achievement::where('user_id', auth()->user()->id)->get();
        // dd($achievements);
        return view('mahasiswa.achievements.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.achievements.create', []);
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->detail), 100);

        Achievement::create($validatedData);

        return redirect('/mahasiswa/achievements')->with('success', 'New achievement has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievement  $achievements
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
        return view('mahasiswa.achievements.show', [
            'achievements' => $achievement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement  $achievements
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        //
        return view('mahasiswa.achievements.edit', [
            'achievements' => $achievement

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->detail), 100);

        Achievement::where('id', $achievement->id)
            ->update($validatedData);

        return redirect('/mahasiswa/achievements')->with('success', 'Achievement has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        //
        Achievement::destroy($achievement->id);
        return redirect('/mahasiswa/achievements')->with('success', 'Achievements has been deleted!');
    }
}
