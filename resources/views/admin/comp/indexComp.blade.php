@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <h1>Liste des compagnies </h1>
    <a href="{{route('admin')}}" class="btn btn-secondary">Retour</a>
    <a href="{{route('comp.create')}}" class="btn btn-primary">Ajouter</a>

    <div class="row">
        @foreach ($comps as $comp)
            <div class="col-4 my-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('img/' . $comp->img)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Compagnie : {{$comp->nom}}</h5>
                      <p class="card-text">Adresse : {{$comp->adresse}}, {{$comp->numero}}</p>
                      <p class="card-text">Email : {{$comp->email}}</p>
                      <p class="card-text">Personne de contact : {{$comp->nomcontact}}, {{$comp->personnecontact}}</p>
                      <a href="{{ route('comp.show', $comp->id) }}" class="btn btn-primary">Show</a>
                      <a href="{{ route('comp.edit',$comp->id) }}" class="btn btn-success">Edit</a>
                      <form action="{{ route('comp.delete', $comp->id )}}" method="post" class="my-2">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">delete</button>
                      </form>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection