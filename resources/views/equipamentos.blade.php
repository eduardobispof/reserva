@extends('layouts.app')

@section('content')

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
							@for($i = 0; $i < 10; $i++)
								<tr>
									<td>Nome do equipamento</td>
									<td>5</td>
								</tr>
							@endfor
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-4">
				<div class="m-2 border p-4">
					<h3>Cadastrar Equipamento</h3>
					<br>
					<form action="">
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
			</div>
		</div>
	</div>

@endsection
