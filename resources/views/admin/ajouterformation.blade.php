@extends('layouts.appadmin')
@section('title')
    Ajouter Formation
@endsection
@section('contenu')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Ajouter Un chauffeur</h6>
                    <div class="form-group">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                <!-- Parcours les erreurs et affiches -->
                                @foreach ($errors->all() as $error)
                                    <li class="text text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="sauverformation" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nom chauffeur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nom_form">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Prenom chauffeur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="prenom_form">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Adresse chauffeur</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="adresse_form">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Telephone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telephone_form">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Date Engagement</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="dateD">
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password_form">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Models Voitures</label>
                            <div class="col-sm-10">
                                <select class="form-select mb-3" aria-label="Default select example" name="referentiel">
                                    <option selected disabled>Open this select menu</option>
                                    @foreach ($referentiels as $r)
                                        <option value="{{ $r->id }}">{{ $r->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control bg-dark" type="file" id="formFile" name="Form_image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Valider">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
