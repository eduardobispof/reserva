@extends('layouts.app')

@section('content')
    <body style="background-image: linear-gradient(-90deg, #343A40, white);">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center img" style="margin-top:-25px;height:100vh;">
                <div class="col text-center " sty>
                    <h1 class="m-auto text-light">Sistema De Reservas - WEB II</h1>
                    <a href="{{route('reserva.index')}}" class="btn btn-outline-light mt-4">Acessar Reservas -></a>
                </div>
            </div>
        </div>
    </body>

@endsection