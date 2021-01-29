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
					<form method="post" action="{{ route('reservations.update', $reservation->id) }}">
						<div class="form-group">
							@csrf
							@method('PATCH')
							<label for="data_reserva">Data Reserva</label>
							<input type="date" class="form-control" name="data_reserva" value="{{ $reservation->data_reserva }}"/>
						</div>
						<div class="form-group">
							<label for="user_id">Usuário</label>
							<input type="number" class="form-control" name="user_id" value="{{ $reservation->user_id }}"/>
						</div>
						<div class="form-group">
							<label for="car_id">Carro</label>
							<input type="number" class="form-control" name="car_id" value="{{ $reservation->car_id }}"/>
						</div>
						<button type="submit" class="btn btn-block btn-danger">Atualizar reservationro</button>
					</form>
  				</div>
			</div>
		</div>
	</div>			
</div>
@endsection