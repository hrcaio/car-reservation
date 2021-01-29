@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Usuários</div>
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
                            <td>Nome</td>
                            <td>CPF</td>
                            <td>Email</td>
                            <td class="text-center">Ações</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->cpf}}</td>
                                <td>{{$users->email}}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary btn-sm">Editar</a>
                                    <form action="" method="post" style="display: inline-block">
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