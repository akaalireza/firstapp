@extends('_Master')

@section('content')

    <div class="panel panel-primary" style="width: 90%; margin: auto">
        <div class=" panel-heading">{{$data['title']}}</div>
        <div class="panel-body">
            {{$data['text']}}
        </div>
    </div>

@endsection