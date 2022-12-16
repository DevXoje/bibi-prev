@extends('template')
@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    @if (isset($books))
        @foreach ($books as $book)
            <p>
                Post=> <a href="/books/{{ $book->id }}">{{ $book->title }} </a>
                @isset($book->user->login)
                    ({{ $book->user->login }})
                @endisset
            </p>

            {{-- {{ $books->links() }} --}}
        @endforeach
    @else
        <p>
            No Hay book disponibles
        </p>
    @endif
    <hr>


@endsection
