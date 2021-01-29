@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar & Atualizar</div>
				<div class="card push-top">
				<div class="card-body">



					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div><br />
					@endif
					<form method="post" action="{{ route('cars.update', $car->id) }}">
						<div class="form-group">
							@csrf
							@method('PATCH')
							<label for="modelo">Modelo</label>
							<input type="text" class="form-control" name="modelo" value="{{ $car->modelo }}"/>
						</div>
						<div class="form-group">
							<label for="marca">Marca</label>
							<input type="text" class="form-control" name="marca" value="{{ $car->marca }}"/>
						</div>
						<div class="form-group">
							<label for="ano">Ano</label>
							<input type="number" class="form-control" name="ano" value="{{ $car->ano }}"/>
						</div>
						<div class="form-group">
							<label for="placa">Placa</label>
							<input type="text" class="form-control" name="placa" value="{{ $car->placa }}"/>
						</div>
						<button type="submit" class="btn btn-block btn-danger">Atualizar Carro</button>
					</form>
  				</div>
			</div>
		</div>
	</div>			
</div>
@endsection