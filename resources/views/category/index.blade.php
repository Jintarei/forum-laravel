@extends('layouts.app')

@section('content')
    <div>
        <ul class="list_categories">
            @foreach($categories as $category)
                <li class="category">
                    <a href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->title }}</a>
                    <form method="POST" action="{{ route('category.destroy', ['id' => $category->id]) }}">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <input type="submit" value="Supprimer" >
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <a class="" href="{{ route('category.create') }}">Ajouter une categorie</a>
@endsection

