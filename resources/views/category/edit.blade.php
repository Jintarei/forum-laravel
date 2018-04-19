@extends('layouts.app')

@section('content')


        <form method="POST" action="{{ route('category.update', ['id' => $category->id]) }}">
            @method('PUT')
            {{ csrf_field() }}

            <p><input type="text" name="title" placeholder="title" value="{{ $category->title }}"></p>
            <p><textarea type="text" name="description" placeholder="description">{{ $category->description }}</textarea></p>
            <p><input type="submit" value="Modifier" ></p>

        </form>

        <a class="" href="{{ route('category.index') }}">Retour</a>



@endsection