@extends('layouts.app')

@section('content')
{{-- @dd($meusEquips)     --}}
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="m-1 p-3">
                    <h2 class="">Suas Reservas</h2>
                    @if(session('msg'))
                        <div class="alert-success p-2">
                            {{session('msg')}}
                        </div>
                    @endif
                    @if(session('msgr'))
                        <div class="alert-danger p-2">
                            {{session('msgr')}}
                        </div>
                    @endif
                    <div class="row p-3">
                        @foreach ($meusEquips[0]->equipamentos as $key => $meuEquip)
                                <div class="col-4 p-0">
                                    <div class="m-2">
                                        <div class="card p-2"  style="height:auto;">
                                            <div class="card-body">
                                                <h5>{{$meuEquip->nome}} - {{$meuEquip->tipo->nome}} </h5>
                                                <hr>
                                                <p>Dia: <span class="text-primary">{{$reserva[$key]->data}}</span></p>
                                                <p><span class="text-info">{{$reserva[$key]->hora_inicio}} - {{$reserva[$key]->hora_fim}}</span></p>
                                                <p>Número de Tombamento : <span>{{$meuEquip->tombamento}}</span></p>
                                            </div>
                                            <div class="text-center">
                                                <a href="{{route('reserva.edit', $reserva[$key]->id)}}" class="btn btn-outline-primary mb-2">Editar Reserva</a>
                                                <form action="{{route('reserva.destroy', $reserva[$key]->id)}}" method="POST">
                                                    @csrf {{-- <-- que coisa nojenta nmrl, Laravel Collective, cd vc?--}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-outline-danger mb-2">Cancelar Reserva</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
    
        <div class="col-sm-4">
            <div class="m-1 border p-3" style="background-color: #fff;">
                <h3>Reservar Equipamento</h3>
                <hr>
                <form action="{{ route('reserva.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        Equipamento:
                        <select name="equipamento" class="form-control" required>
                            <option value="">Selecione um Equipamento </option>
                            @foreach ($equipamentos as $equipamento)
                                <option value="{{$equipamento->id}}">{{$equipamento->nome}} - {{$equipamento->tipos}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        Data:
                        <input type="date" name="data" class="form-control">
                    </div>
                    <div class="form-group">
                        Hora de Início:
                        <input type="time" name="hora_ini" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        Hora de Término:
                        <input type="time" name="hora_fim" class="form-control" required="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark btn-block">Cadastrar Equipamento</button>
                    <button type="reset" class="btn btn-outline-danger btn-block">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
