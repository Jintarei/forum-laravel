@extends('layouts.app')

@section('content')
    <div>
    <h2>{{ $category->titre }}</h2>
        <p>{{ $category->texte }}</p>
        <p>Ecrit par <a href="mailto:{{$category->user->email}}">{{ $category->user->name }}</a></p>
    </div>
@endsection