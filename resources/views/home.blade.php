@extends('template')
@section('title', 'Home')

@section('content')
    <figure>
        <img src="{{asset('/img/welcome.webp')}}" width="200px">

    </figure>
    <h1>Hello World</h1>
    <p>lorem</p>
    <p>lorem</p>
    <figure>
        <img src="{{asset('/img/return_to_you.webp')}}" width="200px">
    </figure>
    <p>lorem <strong>algo</strong> blabla</p>
    <p>lorem</p>

    <p>lorem</p>
    <hr>
    <p>lorem <strong>algo</strong> blabla<strong>algo</strong> blabla</p>
    <p>lorem</p>
    <p>Danke</p>
    <div id="call_to_action">
        <p>blabla</p>{{--Repetido en posts.index--}}
        <form>
            <label for="mail_newsletter">algo</label>
            <input name="mail_newsletter" id="mail_newsletter" placeholder="algo">
            <button type="submit"> subscribre</button>
        </form>
    </div>
@endsection
