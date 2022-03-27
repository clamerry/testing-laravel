<?php

namespace App\Http\Controllers;

use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method utama
        $projects = Project::where('user_id', auth()->user()->id)->get();
        // dd($projects);
        return view('mahasiswa.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.projects.create', []);
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

        Project::create($validatedData);

        return redirect('/mahasiswa/projects')->with('success', 'New project has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('mahasiswa.projects.show', [
            'projects' => $project
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('mahasiswa.projects.edit', [
            'projects' => $project

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
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

        Project::where('id', $project->id)
            ->update($validatedData);

        return redirect('/mahasiswa/projects')->with('success', 'Project has been updated!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        Project::destroy($project->id);
        return redirect('/mahasiswa/projects')->with('success', 'Project has been deleted!');
    }
}
