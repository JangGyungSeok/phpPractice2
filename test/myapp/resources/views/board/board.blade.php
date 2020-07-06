@extends('layouts.app')

@section('content')
    @foreach ($boardContents as $content)
        <a href="/board/{{$content ->id}}"><li>id : {{$content -> id}} name : {{$content -> name}}</li></a> <br>
    @endforeach

    <button type="button" onclick="location.href='/board/create'"> 게시물 생성하기 </button> <br>
@endsection
