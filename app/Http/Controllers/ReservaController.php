<?php

namespace App\Http\Controllers;

use App\User;
use App\Reserva;
use App\Equipamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Http\Requests\ReservaRequest;
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $equipamentos = Equipamento::with('tipo')->get();

        $meusEquips = User::find(Auth::id())->with('equipamentos')->where('id', Auth::id())->get();

        $reserva = Reserva::where('user_id', Auth::id())->get();
        //Formatando data
        foreach ($reserva as $key){
            $key->data = Carbon::parse($key->data)->format('d/m/Y');
        }

        // dd($meusEquips[0]->equipamentos);
        return view ('home', compact('meusEquips', 'equipamentos', 'reserva'));
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
    public function store(ReservaRequest $request)
    {
        $reserva = new Reserva();
        $reserva->data = $request->data;
        $reserva->hora_inicio = $request->hora_ini;
        $reserva->hora_fim = $request->hora_fim;
        $reserva->user_id = Auth::id();
        $reserva->equipamento_id = $request->equipamento;
        $reserva->save();

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
        $equipamentos = Equipamento::with('tipo')->get();
        $reserva = Reserva::find($id);
        return view('reservaEdit', compact('reserva', 'equipamentos'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservaRequest $request, $id)
    {
        $reserva = Reserva::find($id);
        $reserva->data = $request->data;
        $reserva->hora_inicio = $request->hora_ini;
        $reserva->hora_fim = $request->hora_fim;
        $reserva->equipamento_id = $request->equipamento;
        $reserva->save();
        return redirect('home')->with('msg', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Reserva::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
