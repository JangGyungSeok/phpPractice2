@extends('layouts.app')

@section('content')
    <form action="/board" method="POST">
        @csrf
        name = <input type="text" id='namebox' name="name"> <br>

        <button type="submit"> 게시물 추가 </button>
    </form>
    {{-- @foreach ($boardContents as $content)
        id : {{$content -> id}} name : {{$content -> name}} <br>
    @endforeach --}}
@endsection
