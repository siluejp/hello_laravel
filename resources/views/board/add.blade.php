@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table>
    <form action="/board/add" method="post">
        {{ csrf_field() }}
        <tr><th>person id: </th><td><input type="number" name="person_id" value="{{ old('person_id') }}"></td></tr>
        <tr><th>title: </th><td><input type="text" name="title" value="{{ old('title') }}"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message" value="{{ old('message') }}"></td></tr>
        <input type="submit" value="send">
    </form>
    </table>
@endsection

@section('footer')
copyright 2024 tuyano.
@endsection