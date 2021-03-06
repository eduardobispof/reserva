<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\Equipamento;
use Illuminate\Http\Request;
use App\Http\Requests\TiposRequest;
class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $equipamento = Equipamento::with('tipo')->get();
        $tipos = Tipo::all();
        return view('equipamentos')->with('equipamento', $equipamento)
            ->with('tipos', $tipos);
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
    public function store(TiposRequest $request)
    {
        $save = new Equipamento();
        $save->nome = $request->nome;
        $save->tombamento = $request->tombamento;
        $save->tipo_id = $request->tipo;
        $save->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipamento = Equipamento::with('tipo')->where('id', $id)->first();
        $tipos = Tipo::all();
        return view('equipamentoEdit', compact('equipamento','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TiposRequest $request, $id)
    {
        $save = Equipamento::find($id);
        $save->nome = $request->nome;
        $save->tombamento = $request->tombamento;
        $save->tipo_id = $request->tipo;
        $save->save();
        return redirect('equipamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Equipamento::find($id);
        $delete->delete();
        return redirect()->back();
    }   
}
