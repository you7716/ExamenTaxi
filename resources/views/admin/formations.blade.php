@extends('layouts.appadmin')
@section('title')
    Formations
@endsection
@section('contenu')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary  h-100 p-4">
                    <h6 class="mb-4">CHAUFFEURS</h6>
                    <div class="form-group">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Date Debut</th>
                                    <th scope="col">MATRICULE VOITURE</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Activer</th>
                               <!--     <th scope="col">Action</th>   --->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formations as $f)
                                    <tr>
                                        <th scope="row">{{ $f->id }}</th>
                                     
                                        <th scope="col">{{ $f->prenom }}</th>
                                        <th scope="col">{{ $f->nom }}</th>
                                        <th scope="col">{{ $f->date }}</th>
                                        <th scope="col">{{ $f->referentiel_id }}</th>
                                        
                                        <th scope="col">
                                            @if ($f->status == 1)
                                                <label class="btn btn-info">En cours...</label>
                                            @else
                                                <label class="btn btn-warning">En attente</label>
                                            @endif
                                        </th>

                                         <td scope="col">
                                             @if ($f->status == 0)
                                                <button class="btn btn-outline-success"
                                                    onclick=" window.location=' {{ url('/activer_form/' . $f->id) }} '">Activer
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="back/js/data-table.js"></script>
@endsection
