@extends('layouts.main-layout')

@section('content')
    
    @include('includes.categories')

    <h1 class="mt-5 mb-4 text-center">{{$post->title}}</h1>
    <a href="{{route('getPostsByCategory', $slug_category) }}" class="btn btn-outline-primary mb-4">Back</a>
    <article>
        {!! $post->text !!}
    </article>

@endsection