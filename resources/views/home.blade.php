@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="m-1 p-3">
                <h2 class="">Suas Reservas</h2>
                <div class="row p-3">
                    @for($i=0; $i < 5; $i++)
                        <div class="col-4 p-0">
                            <div class="m-2">
                                <div class="card p-2" style="height: 330px;">
                                    <div class="card-body">
                                        <h5>Nome do Equip</h5>
                                        <hr>
                                        <p>Dia: <span class="text-primary">00/00</span></p>
                                        <p><span class="text-info">00:00 - 00:00</span></p>
                                        <p>Tombamento</p>
                                        <p>Tipo do equip </p>
                                    </div>
                                    <a href="#" class="text-danger text-center mb-2">Cancelar Reserva</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-0">
                            <div class="m-2">
                                <div class="card p-2"  style="height: 330px;">
                                    <div class="card-body">
                                        <h5>Nome Extendido do Equip</h5>
                                        <hr>
                                        <p>Dia: <span class="text-primary">00/00</span></p>
                                        <p><span class="text-info">00:00 - 00:00</span></p>
                                        <p>Tombamento</p>
                                        <p>Tipo do equip </p>
                                    </div>
                                    <a href="#" class="text-danger text-center mb-2">Cancelar Reserva</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="m-1 border p-3" style="background-color: #fff;">
                <h3>Cadastrar Equipamento</h3>
                <hr>
                <form action="">
                    @csrf
                    <div class="form-group">
                        Nome do Equipamento:
                        <input type="text" name="nome" class="form-control" required="" placeholder="Nome do equipamento...">
                    </div>
                     <div class="form-group">
                        Tombamento:
                        <input type="text" name="tombamento" class="form-control" required="" placeholder="Tombamento...">
                    </div>
                    <div class="form-group">
                        Tipo do Equipamento:
                        <select name="tipo" class="form-control">
                            <option></option>
                            <option value="Tipo">Tipo</option>
                            <option value="Tipo">Tipo</option>
                            <option value="Tipo">Tipo</option>
                            <option value="Tipo">Tipo</option>
                            <option value="Tipo">Tipo</option>
                        </select>
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
