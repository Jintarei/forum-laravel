@extends('layouts.app')

@section('content')


        <form method="POST" action="{{ route('subcategory.update', ['id' => $subcategory->id]) }}">
            @method('PUT')
            {{ csrf_field() }}

            <p><input type="text" name="title" placeholder="title" value="{{ $subcategory->title }}"></p>
            <p><textarea type="text" name="description" placeholder="description">{{ $subcategory->description }}</textarea></p>
            <p><input type="submit" value="Modifier" ></p>

        </form>

        <a class="" href="{{ route('subcategory.index') }}">Retour</a>



@endsection