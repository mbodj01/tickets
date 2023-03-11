@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Gestion des utilisateurs</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-right">
                    <a class="btn btn-success" href="">Ajouter un nouvel utilisateur</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($user as $users)
                    <tr>
                        <td>{{$users}}</td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-primary" href="">Modifier</a>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </td>
            @endforeach
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
