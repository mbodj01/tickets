@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Equipe de support') }}</div>
                    <div class="card-body">
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                <th>Intitulé du ticket</th>
                                <th>Etat du ticket</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($ticket as $tickets)
                                <tr>
                                <td>
                                    {{ $tickets }}</td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" name="etat">
                                            <option value="recu">Reçu</option>
                                            <option value="attente">En attente</option>
                                            <option value="traitement">Ne pas traiter</option>
                                            <option value="termine">Terminé</option>
                                            <option value="cloture">Cloturé</option>
                                            </select>
                                        </div>
                                    </td>
                                @endforeach

                                </tr>
                            </tbody>
                            </table>

@endsection
