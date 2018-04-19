@extends('layouts.app')

@section('content')
    <div>
        <ul class="list_categories">
            @foreach($categories as $category)
                <li class="category">
                    <a href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <a class="" href="{{ route('category.create') }}">Ajouter une category</a>
@endsection

