<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::where('user_id', auth()->user()->id)->paginate(5);
        return view('dashboard.alternatif.index',[
            'alternatifs' => $alternatif
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteriaName = Kriteria::all()->pluck('kriteria')->toArray();

        return view('dashboard.alternatif.create', compact('kriteriaName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'alternatif' => 'required|unique:alternatifs',
            'k1' => 'required',
            'k2' => 'required',
            'k3' => 'required',
            'k4' => 'required',
            'k5' => 'required',
            'k6' => 'required',
            'k7' => 'required',
            'k8' => 'required',
            'k9' => 'required',
            'k10' => 'required',
            'k11' => 'required',
            'k12' => 'required'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        Alternatif::create($validatedData);

        return redirect()->route('alternatif.index')->with('success', 'Data Calon Pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        $kriteriaName = Kriteria::all()->pluck('kriteria')->toArray();
        $data = $alternatif->where('id', $alternatif->id )->first();
    

        return view('dashboard.alternatif.edit', 
            compact('kriteriaName') , 
            [ 'data' => $data ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        $rules =
        [
            'k1' => 'required',
            'k2' => 'required',
            'k3' => 'required',
            'k4' => 'required',
            'k5' => 'required',
            'k6' => 'required',
            'k7' => 'required',
            'k8' => 'required',
            'k9' => 'required',
            'k10' => 'required',
            'k11' => 'required',
            'k12' => 'required',
        ];

        if($request->alternatif != $alternatif->alternatif){
            $rules['alternatif'] = 'required|unique:alternatifs';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $alternatif->update($validatedData);

        return redirect()->route('alternatif.index')->with('success', 'Data calon pegawai berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        Alternatif::destroy($alternatif->id);
        return redirect()->route('alternatif.index')->with('delete', 'Data calon pegawai berhasil dihapus!');
    }
}
