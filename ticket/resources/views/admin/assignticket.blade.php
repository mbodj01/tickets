@extends('layouts.app')

@section('content')
<div class="container">
<h1>Gestion des Tickets</h1>
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Intitulé du ticket</th>
                    <th>Createur du ticket</th>
                    <th>Assigner à</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                        <div class="form-group">
                                        <select class="form-control" name="Receveur">
                                        <option value="">Choisir le traiteur</option>
                                        <option value="">Support 1</option>
                                        <option value="">Support 2</option>
                                        <option value="">Support 3</option>
                                        <option value="">Support 4</option>
                                        </select>
                                    </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection

