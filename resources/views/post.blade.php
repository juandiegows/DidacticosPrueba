@extends('template')

@section('content')
    <section class="blog_details">
        <a href="/">Volver</a>
        <h2 class="title">{{ $post->title ?? 'No encontrado' }}</h2>
        <p class="description">{{ $post->description }}</p>
    </section>
@endsection
