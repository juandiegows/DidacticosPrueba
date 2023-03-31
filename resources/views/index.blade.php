@extends('template')

@section('content')
    <div class="filter">
        <h3>Seleccionar fecha</h3>
        <form class="form" action="search" method="get">
            <input class="date" type="date" id="fecha" name="fecha" required>
            <button class="btn" type="submit">Buscar</button>
        </form>
    </div>
    <section class="blogs">
        <h1 class="title">Blogs</h1>
        @foreach ($blogs as $blog)
            <article class="blog">
                <h2 class="blog__title">{{ $blog->title }}</h2>
                <p class="blog__short_description"> {{ $blog->excerpt }}</p>
                <div class="details">
                    <p class="details__date">{{ $blog->created_at }}</p>
                    <a class="details_btn_see_more" href="{{ route('post', $blog->slug) }}">ver más</a>
                </div>
            </article>
        @endforeach

    </section>
@endsection
