@extends('layouts.index')

@section('content')
    <h1>Back office | dashboard</h1>
    <a href="{{route('home')}}" class="btn btn-secondary">Back to site</a>
    <a href="{{route('comp.index')}}" class="btn btn-primary">Voir les compagnies</a>
@endsection