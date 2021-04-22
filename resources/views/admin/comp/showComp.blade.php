@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <h1>Liste des compagnies </h1>
    <a href="{{route('comp.index')}}" class="btn btn-secondary">Retour liste compagnie</a>

    <div class="row">
        <div class="col-8 mx-auto my-3">
            <div class="card" >
                <img class="card-img-top" src="{{asset('img/' . $comp->img)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Compagnie : {{$comp->nom}}</h5>
                    <p class="card-text">Adresse : {{$comp->adresse}}, {{$comp->numero}}</p>
                    <p class="card-text">Email : {{$comp->email}}</p>
                    <p class="card-text">Personne de contact : {{$comp->nomcontact}}, {{$comp->personnecontact}}</p>
                    <form action="{{route('comp.delete', $comp->id)}}" method="post" class="my-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                    </form>
                </div>
                </div>
        </div>
    </div>
@endsection