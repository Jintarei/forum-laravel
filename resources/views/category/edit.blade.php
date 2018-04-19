@extends('layouts.app')

@section('content')


        <form method="POST" action="{{ route('categories.update', ['id' => $category->id]) }}">
            @method('PUT')
            {{ csrf_field() }}

            <p><input type="text" name="titre" placeholder="titre" value="{{ $category->title }}"></p>
            <p><textarea type="text" name="texte" placeholder="texte">{{ $category->texte }}</textarea></p>
            <p><input type="submit" value="Modifier" ></p>

        </form>


@endsection