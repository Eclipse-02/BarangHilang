<?php

namespace App\Http\Controllers;

use App\Models\Kehilangan;
use App\Models\Tipe;
use Illuminate\Http\Request;

class AdminKehilanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipes = Tipe::all();
        $kehilangans = Kehilangan::latest()->paginate(5);
        return view('admin.kehilangans.index', compact('kehilangans', 'tipes'))
                ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'nullable|image|file|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable'
        ]);

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('found-images');
        }

        Kehilangan::create($data);

        return redirect()->route('admin.kehilangans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function show(Kehilangan $kehilangan)
    {
        return view('admin.kehilangans.show', compact('kehilangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kehilangan $kehilangan)
    {
        $tipes = Tipe::all();
        return view('admin.kehilangans.edit', compact('kehilangan', 'tipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kehilangan $kehilangan)
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'nullable|file|image|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
        ]);

        if($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('lost-images');
        }

        $kehilangan->update($data);

        return redirect()->route('admin.kehilangans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kehilangan $kehilangan)
    {
        $kehilangan->delete();

        return view('admin.kehilangans.index');
    }
}
