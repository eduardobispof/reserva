@extends('layouts.app')

@section('content')
    {{-- @dd($equipamentos) --}}
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="m-2">
					<h3>Equipamentos Cadastrados</h3>
					<br>
					<table class="table table-bordered table-hover text-center">
						<thead class="bg-dark text-light">
							<tr>
								<th>Equipamento</th>
								<th>Nº  Tombamento</th>
							</tr>
						</thead>
						<tbody>

                        </tbody>
					</table>
                </div>
                <br>
                <div class="m-2">
					<h3>Tipos Cadastrados</h3>
					<br>
					<table class="table table-bordered table-hover text-center">
						<tbody>
                            @foreach ($equipamentos as $key)
                                <tr>
                                    <td>
                                        {{ $key->nome}}
                                    </td>
                                </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-4">
				<div class="m-2 border p-4">
					<h3>Cadastrar Equipamento</h3>
					<br>
					<form action="" method="POST">
						@csrf
						<div class="form-group">
							Nome do equipamento:
							<input type="text" class="form-control" name="nome" placeholder="Nome do equipamento..." required="">
						</div>
						<div class="form-group">
							Nº do Tombamento:
							<input type="text" class="form-control" name="tombamento" placeholder="Entre com um número" required="">
						</div>
						<br>
						<button type="submit" class="btn btn-dark btn-block">Cadastrar Equipamento</button>
						<button type="submit" class="btn btn-outline-danger btn-block">Cancelar</button>
                    </form>
                </div>
                <br>
                <div class="m-2 border p-4">
					<h3>Cadastrar Tipo</h3>
					<br>
					<form action="{{ route('equipamentos.store') }}" method="POST">
						@csrf
						<div class="form-group">
							Tipo do Equipamento:
							<input type="text" class="form-control" name="tipo" placeholder="Nome do Tipo" required="">
						</div>
						<br>
						<button type="submit" class="btn btn-dark btn-block">Cadastrar Tipo</button>
						<button type="submit" class="btn btn-outline-danger btn-block">Cancelar</button>
                    </form>
                </div>
			</div>
		</div>
	</div>

@endsection
