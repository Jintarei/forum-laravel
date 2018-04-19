@extends('layouts.app')

@section('content')


        <form method="POST" action="{{ route('category.store') }}">
            {{ csrf_field() }}

            <p><input type="text" name="title" placeholder="Titre"></p>
            <p><textarea type="text" name="description" placeholder="Description"></textarea></p>
            <p><input type="submit" value="ajouter" ></p>

        </form>


@endsection