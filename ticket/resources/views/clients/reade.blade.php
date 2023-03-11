@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Suivi des tickets</h1>
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
                        <td>{{ $tickets }}</td>
                        <td>REÇU</td>
                        @endforeach
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
