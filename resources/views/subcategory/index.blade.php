@extends('layouts.app')

@section('content')
    <div>
        <ul class="list_categories">
            @foreach($subcategories as $subcategory)
                <li class="subcategory">
                    <a href="{{ route('subcategory.show', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->title }}</a>
                    <form method="POST" action="{{ route('subcategory.destroy', ['id' => $subcategory->id]) }}">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <input type="submit" value="Supprimer" >
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <a class="" href="{{ route('subcategory.create') }}">Ajouter une categorie</a>
@endsection

