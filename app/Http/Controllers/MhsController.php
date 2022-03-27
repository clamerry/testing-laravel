<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMhsRequest;
use App\Http\Requests\UpdateMhsRequest;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method utama
        $mhs = Mhs::where('user_id', auth()->user()->id)->get();
        // dd($mhs);
        return view('admin.mhs.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.mhs.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMhsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMhsRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nama_mhs' => 'required',
            'nim' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->detail), 100);

        Mhs::create($validatedData);

        return redirect('/admin/daftar_mhs')->with('success', 'New Mahasiswa has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show(Mhs $mhs)
    {
        //
        return view('admin.mhs.show', [
            'mhs' => $mhs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit(Mhs $mhs)
    {
        //
        return view('admin.mhs.edit', [
            'mhs' => $mhs

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMhsRequest  $request
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMhsRequest $request, Mhs $mhs)
    {
        //
        $rules = [
            'nama_mhs' => 'required',
            'nim' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = '1';
        $validatedData['excerpt'] = Str::limit(strip_tags($request->detail), 100);

        Mhs::where('id', $mhs->id)
            ->update($validatedData);

        return redirect('/admin/daftar_mhs')->with('success', 'Mahasiswa has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mhs $mhs)
    {
        //
        Mhs::destroy($mhs->id);
        return redirect('/admin/daftar_mhs')->with('success', 'Mahasiswa has been deleted!');
    }
}
