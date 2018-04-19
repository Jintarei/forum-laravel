@extends('layouts.app')

@section('content')
    <div>
    <h2>{{ $category->title }}</h2>
        <p>{{ $category->description }}</p>
        <p>Ecrit par <a href="mailto:{{$category->user->email}}">{{ $category->user->name }}</a></p>
    </div>
    <a class="" href="{{ route('category.index') }}">Retour</a>
    <a class="" href="{{ route('category.edit', ['id' => $category->id]) }}">Modifier</a>
@endsection