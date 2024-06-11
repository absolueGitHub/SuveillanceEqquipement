@extends('base')

@section('title')
    {{ "page d'acceil du Laboratoire " }}
@endsection

@section('contenue')
    <div class="container-fluid p-0 m-0 vh-100 baniere ">
        <div class="image h-100 w-100">
            <div class="row justify-content-center rounded-2">
                <div class="col-10 pt-2 ">
                    <div class="row w-100 justify-content-center rounded align-items-center menu-transparent">
                        <div class="col">
                            <a class="navbar-brand row justify-content-start align-items-center" href="#">
                                <i class="bi bi-binoculars col-1 " style="font-size: 2.5rem;"></i>
                                <div class="logo col ">
                                    <span class="first-letter">L</span>aboratory
                                </div>
                            </a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <div class="container-fluid">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <!-- Liens de navigation -->
                                    <div class="collapse navbar-collapse d-flex align-items-center" id="navbarNav">
                                        <ul class="navbar-nav d-flex justify-content-around align-items-center">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="bi bi-house"></i>
                                                    Accueil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="bi bi-people"></i>
                                                    patenaire</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="bi bi-info-circle"></i>
                                                    A propos</a>
                                            </li>
                                            <li class="nav-item ">
                                                <button type="button" class="btn btn-outline-primary">Inscription</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-75 inside align-items-center mt-5">
                <div class="col-7 d-flex contenu-transparent p-4 rounded flex-column align-items-center ">
                    <div class="row flex-column">
                        <div class="col p-2">
                            <h2 class="title1">Bienvenue</h2>
                        </div>
                        <div class="col p-2">
                            <h1 class="title2">Découvrez notre Laboratoire</h1>
                        </div>
                        <div class="col p-2">
                            <h3 class="title3">Rejoignez-nous dès maintenant !</h3>
                        </div>
                    </div>
                    <div class="row justify-content-around w-100 align-items-center">
                        <div class="col-4">
                            <a href="{{ route('connect') }}">
                                <button class="btn btn-lg btn-primary w-75"> {{ "Connexion" }} </button>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('create') }}">
                                <button class="btn btn-lg btn-outline-primary w-75"> {{ "Inscription" }} </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
