@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h3>Bienvenue sur votre plateforme de gestion des dépôts de mémoire</h3>
        <p>Utilisez le menu pour naviguer dans les différentes sections.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Mémoires</h5>
                        <p class="card-text display-6">42</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Étudiants inscrits</h5>
                        <p class="card-text display-6">25</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                       <h5 class="card-title">Encadreurs</h5>
                        <p class="card-text display-6">8</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
