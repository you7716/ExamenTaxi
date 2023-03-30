@extends('layouts.candidat')
@section('contenu')
    <section class="home-grid">

        <h1 class="heading">Options Rapides</h1>
        @if (session()->has('success'))
            <div style="background-color:darkcyan; color:black; font-weight:bold ">
                {{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div style="background-color:brown; color:black; font-weight:bold ">
                {{ session()->get('error') }}</div>
        @endif
        <div class="box-container" style="color: yellow">
            <div class="box">
                <h3 class="title">Vehicule Disponible</h3>
                <div class="flex">
                    @foreach ($referentiels as $r)
                        <a href="{{ URL::to('all/' . $r->id) }}"><span>{{ $r->libelle }}</span></a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
