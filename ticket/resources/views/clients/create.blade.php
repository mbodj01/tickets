@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creation de ticket') }}</div>
                    <div class="card-body">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="intitule">Intitulé du ticket</label>
                                    <input type="text" class="form-control" id="intitule" name="intitule" required>
                                </div>
                                <div class="form-group">
                                    <label for="objet">Objet du ticket</label>
                                    <input type="text" class="form-control" id="objet" name="objet" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="position-right">Ticket créé par : {{Auth::user()->name}}</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
