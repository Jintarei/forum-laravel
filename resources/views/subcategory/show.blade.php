@extends('layouts.app')

@section('content')
    <div>
    <h2>{{ $subcategory->title }}</h2>
        <p>{{ $subcategory->description }}</p>
        <p>Ecrit par <a href="mailto:{{ $subcategory->user->email }}">{{ $subcategory->user->name }}</a></p>
    </div>
    <a class="" href="{{ route('subcategory.index') }}">Retour</a>
    <a class="" href="{{ route('subcategory.edit', ['id' => $subcategory->id]) }}">Modifier</a>
@endsection