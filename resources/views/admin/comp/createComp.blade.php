@extends('layouts.index')

{{-- @include('layouts.flash') --}}
@section('content')
    <h1>Création d'une compagnie</h1>
    <p>Formulaire d'ajout</p>
    <a href="{{route('comp.index')}}" class="btn btn-primary">Retour</a>
    <form method="post" action="{{route('comp.store')}}">
        @csrf
        <div class="form-group">
          <label for="nom">Nom compagnie</label>
          <input type="text" class="form-control @error('nom') is-invalid  @enderror" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Entrer nom">
          @error('nom')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="adresse">adresse compagnie</label>
          <input type="text" class="form-control @error('adresse') is-invalid  @enderror" id="adresse" name="adresse" value="{{ old('adresse') }}" placeholder="Entrer adresse">
          @error('adresse')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="postal">postal</label>
          <input type="number" class="form-control @error('postal') is-invalid  @enderror" id="postal" name="postal" value="{{ old('postal') }}" placeholder="Entrer postal">
          @error('postal')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">numero</label>
          <input type="number" class="form-control @error('numero') is-invalid  @enderror" id="numero" name="numero"  value="{{ old('numero') }}" placeholder="Entrer numero">
          @error('numero')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input type="email" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Entrer email">
            @error('email')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="prenomcontact">Personne de contact prenom</label>
          <input type="text" class="form-control @error('prenomcontact') is-invalid  @enderror" id="prenomcontact" name="prenomcontact" value="{{ old('prenomcontact') }}" placeholder="Entrer prenomcontact">
          @error('prenomcontact')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="nomcontact">Personne de contact nom</label>
          <input type="text" class="form-control @error('nomcontact') is-invalid  @enderror" id="nomcontact" name="nomcontact" value="{{ old('nomcontact') }}" placeholder="Entrer nomcontact">
          @error('nomcontact')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="img">UTL img</label>
          <input type="text" class="form-control @error('img') is-invalid  @enderror" id="img" name="img" value="{{ old('img') }}" placeholder="Entrer img">
          @error('img')
            <span class="invalid-feedback">
                <strong>{{ $message}}</strong>
            </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection