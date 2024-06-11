@extends('base')

@section('title')
    {{ 'dashboard utulisateur ' }}
@endsection

@section('contenue')
    <div class="container">
        <div class="col-8 justify-content-center">
            @auth
                <p>vous etre connecter en tant que :{{ Auth::user()->name }} </p>
            @else
                <p>vous n'est pas connecter desoler</p>
            @endauth
            @foreach ($equipementsDisponibles as $equipement)
                <div class="row equipement-trans m-2 p-1 border rounded-4 ">
                    <div class="col-2">
                        pic here
                    </div>
                    <div class="col-7">
                        <h3> {{$equipement->name}} </h3>
                        <h6>  {{$equipement->description}} </h6>
                    </div>
                    <form action="" method="post" class="col-3">
                        <button type="submit" class="btn btn-primary">Demander</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
