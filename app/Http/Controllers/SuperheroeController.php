<?php

namespace App\Http\Controllers;
use App\Superheroe;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superheroes=Superheroe::orderBy('id', 'asc')->paginate(5);
        return view ('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'poder' => 'required',
            'creador' => 'required',
        ]);
        Superheroe::create($request->all());
        return redirect()->route('superheroes.index') ->with('success','Doctor agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $superheroes = Superheroe::all();
        $pdf = PDF::loadview('superheroes.mostrar',compact('superheroes'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superheroe=Superheroe::find($id);
        return view('superheroes.edit',compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'poder' => 'required',
            'creador' => 'required',
        ]);
        Superheroe::find($id)->update($request->all());
        return redirect()->route('superheroes.index')->with('success','Datos del Doctor se actualizaron');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Superheroe::find($id)->delete();
        return redirect()->route('superheroes.index')->with('success','Datos del Doctor se eliminaron');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
