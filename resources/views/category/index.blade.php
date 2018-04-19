@extends('layouts.app')

@section('content')
    <div>
        <ul class="list_categories">
            @foreach($categories as $category)
                <li class="category">
                    <a href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->title }}</a>
                    <i class="fa fa-user"></i>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

