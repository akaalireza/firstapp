@extends('_Master')

@section('content')

    <div style="width: 90%; margin: auto">

    <form method="post" action="/update/{{$data['id']}}">
        <input type = "hidden" name="_token" value="{{ csrf_token() }}" >
        <input class="form-control" placeholder="title" name="title" value="{{$data['title']}}">
        <textarea class="form-control" placeholder="content" name="text">{{$data['text']}}</textarea>
        <input type="submit" class="btn btn-primary" value="update">
    </form>

    </div>
@endsection