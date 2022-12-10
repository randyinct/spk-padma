<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kriteria = Kriteria::paginate(6);
         return view ('dashboard.kriteria.index',[
            'kriterias' => $kriteria
         ]); 

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriteria)
    {
        $data = $kriteria->where('id', $kriteria->id )->first();
        return view('dashboard.kriteria.edit',[
            'data' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Kriteria $kriteria)
    {
        $rules = [
            //'kode' => 'required|',
            'kriteria' =>'required',
            'bobot' => 'required',
            'cost_benefit' => 'required'
        ];

        $validatedData = $request->validate($rules);

        // $validatedData = $request->all();
        $kriteria->update($validatedData);

        return redirect()->route('kriterias.index')->with('success', 'Data Kriteria Berhasil diupdate!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriteria)
    {
        //
    }
}
