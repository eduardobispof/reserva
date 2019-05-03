@extends('layouts.app')

@section('content')
	{{-- @dd($equipamento) --}}
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
								<th>Tipo</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach($equipamento as $key)
								<tr>
									<td>{{$key->nome}}</td>
									<td>{{$key->tombamento}}</td>
									<td>{{$key['tipo']->nome}}</td>
									<td>
										<a href="{{route('equipamentos.edit', $key->id)}}" class="text-primary">Editar</a>
										<a href="" class="text-danger">Deletar</a>
									</td>
								</tr>
							@endforeach
                        </tbody>
					</table>
                </div>
                <br>
                <div class="m-2">
					<h3>Tipos Cadastrados</h3>
					<br>
					<table class="table table-bordered table-hover text-center">
						<thead class="bg-dark text-light">
							<th>Nome:</th>
							<th>Ações</th>
						</thead>
						<tbody>
							@foreach ($tipos as $key)
								<tr>
									<td>
										{{ $key->nome}}
									</td>
									<td>
										<form action="{{route('tipos.destroy', $key->id)}}" method="POST">
												{{method_field('DELETE')}}
												@csrf
												<button type="submit" class="btn btn-outline-danger btn-block form-control">Deletar</button>
										</form>
									</td>
								</tr>
							@endforeach
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-4">
				<div class="m-2 border p-4">
					<h3>Cadastrar Equipamento</h3>
					<br>
					<form action="{{route('equipamentos.store')}}" method="POST">
						@csrf
						<div class="form-group">
							Nome do equipamento:
							<input type="text" class="form-control" name="nome" placeholder="Nome do equipamento..." required="">
						</div>
						<div class="form-group">
							Nº do Tombamento:
							<input type="text" class="form-control" name="tombamento" placeholder="Entre com um número" required="">
						</div>
						<div class="form-group">
							Tipo do Equipamento:
							<select name="tipo" class="form-control">
								<option>Selecione um Equipamento</option>
								@foreach($tipos as $key)
									<option value="{{$key->id}}">{{$key->nome}}</option>
								@endforeach
							</select>
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
					<form action="{{ route('tipos.store') }}" method="POST">
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
