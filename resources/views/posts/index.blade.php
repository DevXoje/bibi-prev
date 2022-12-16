@extends('template')
@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    @if (isset($posts))
        @foreach ($posts as $post)
            <p>
                Post=> <a href="/posts/{{ $post->id }}">{{ $post->title }} </a>
                @isset($post->user->login)
                    ({{ $post->user->login }})
                @endisset
            </p>

            {{-- {{ $posts->links() }} --}}
        @endforeach
    @else
        <p>
            No Hay post disponibles
        </p>
    @endif
<hr>
    <div id="other_call_to_action">
        <h2>Sigue mi blog</h2>
        <p>blabla</p>{{--Repetido en home--}}
        <form>
            <label for="mail_newsletter">algo</label>
            <input name="mail_newsletter" id="mail_newsletter" placeholder="algo">
            <button type="submit"> subscribre</button>
        </form>

    </div>

@endsection
