<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use App\Models\Menemukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMenemukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipes = Tipe::all();
        $menemukans = Menemukan::latest()->paginate(5);
        return view('admin.menemukans.index', compact('menemukans', 'tipes'))
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

        Menemukan::create($data);

        return redirect()->route('admin.menemukans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function show(Menemukan $menemukan)
    {
        return view('admin.menemukans.show', compact('menemukan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function edit(Menemukan $menemukan)
    {
        return view('admin.menemukans.edit', compact('menemukan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menemukan $menemukan)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tipe' => 'required',
            'foto' => 'image|file|max:1024',
            'keterangan' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable'
        ]);

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('image');
        }

        $request->update($data);

        return redirect()->route('admin.menemukans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menemukan  $menemukan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menemukan $menemukan)
    {
        $menemukan->delete();

        return redirect()->route('admin.menemukans.index');
    }
}
