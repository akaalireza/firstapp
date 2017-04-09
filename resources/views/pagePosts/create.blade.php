@extends('_Master')

@section('content')

    <div style="width: 90%; margin: auto">

        <form method="post" action="/store">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="form-control" placeholder="title" name="title" value="{{old('title')}}">
            <textarea class="form-control" placeholder="content" name="text">{{old('text')}}</textarea>
            <input type="submit" class="btn btn-primary" value="create">
        </form>

    </div>



    @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $e)
            <li>{{$e}}</li>
        @endforeach
        </div>
    @endif

@endsection