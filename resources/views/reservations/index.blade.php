@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Reservas</div>
                <div class="card-body">
                    <div class="push-top">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}  
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr class="table-warning">
                            <td>ID</td>
                            <td>Data da Reserva</td>
                            <td>Usuario</td>
                            <td>Carro Reservado</td>
                            <td class="text-center">Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservation as $reservations)
                            <tr>
                                <td>{{$reservations->id}}</td>
                                <td>{{$reservations->data_reserva}}</td>
                                <td>{{$reservations->user_id}}</td>
                                <td>{{$reservations->car_id}}</td>
                                <td class="text-center">
                                    <a href="{{ route('reservations.edit', $reservations->id)}}" class="btn btn-primary btn-sm"">Editar</a>
                                    <form action="{{ route('reservations.destroy', $reservations->id)}}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<div>
@endsection