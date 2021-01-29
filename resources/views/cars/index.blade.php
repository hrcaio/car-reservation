@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ route('cars.create') }}" class="btn btn-info" role="button">Adicionar Carro</a>
            <div class="card">
                <div class="card-header">Lista de Carros</div>
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
                            <td>Modelo</td>
                            <td>Marca</td>
                            <td>Ano</td>
                            <td>Placa</td>
                            <td class="text-center">Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($car as $cars)
                            <tr>
                                <td>{{$cars->id}}</td>
                                <td>{{$cars->modelo}}</td>
                                <td>{{$cars->marca}}</td>
                                <td>{{$cars->ano}}</td>
                                <td>{{$cars->placa}}</td>
                                <td class="text-center">
                                    <a href="{{ route('cars.edit', $cars->id)}}" class="btn btn-primary btn-sm"">Editar</a>
                                    <form action="{{ route('cars.destroy', $cars->id)}}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                                    </form>
                                    <button class="btn btn-danger btn-sm" type="submit">Fazer Reserva</button>
                                    <button class="btn btn-danger btn-sm" type="submit">Ver Reservas</button>
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