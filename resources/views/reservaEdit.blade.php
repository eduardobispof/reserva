@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="m-1 border p-3" style="background-color: #fff;">
                <h3>Editar Reserva</h3>
                <hr>
                @if(session('msgr'))
                    <div class="alert-danger p-2">
                        {{session('msgr')}}
                    </div>
                @endif
                <form action="{{ route('reserva.update', $reserva->id)}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}
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
                            <option value="">Selecione um Equipamento</option>
                            @foreach ($equipamentos as $equipamento)
                                <option value="{{$equipamento->id}}">{{$equipamento->nome}} - {{$equipamento->tipos}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        Data:
                        <input type="date" name="data" class="form-control" value="{{$reserva->data}}">
                    </div>
                    <div class="form-group">
                        Hora de Início:
                        <input type="time" name="hora_ini" class="form-control" value="{{$reserva->hora_inicio}}">
                    </div>
                    <div class="form-group">
                        Hora de Término:
                        <input type="time" name="hora_fim" class="form-control" required="" value="{{$reserva->hora_fim}}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark btn-block">Salvar Reserva</button>
                    <button type="reset" class="btn btn-outline-danger btn-block">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection