@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="m-2 border p-4">
                <h3>Atualizar Equipamento</h3>
                <br>
                <form action="{{route('equipamentos.update', $equipamento->id)}}" method="POST">
                    {{method_field('PUT')}}
                    @csrf
                    <div class="form-group">
                        Nome do equipamento:
                        <input type="text" class="form-control" 
                        name="nome" placeholder="Nome do equipamento..." value="{{$equipamento->nome}}" required="">
                    </div>
                    <div class="form-group">
                        Nº do Tombamento:
                        <input type="text" class="form-control" 
                        name="tombamento" placeholder="Entre com um número" value="{{$equipamento->tombamento}}" required="">
                    </div>
                    <div class="form-group">
                        Tipo do Equipamento:
                        <select name="tipo" class="form-control" required="">
                            <option value="">Selecione um Tipo</option>
                            @foreach($tipos as $key)
                                <option value="{{$key->id}}">{{$key->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark btn-block">Atualizar Equipamento</button>
                    <button type="submit" class="btn btn-outline-danger btn-block">Cancelar</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection