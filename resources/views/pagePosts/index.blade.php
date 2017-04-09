@extends('_Master')

@section('content')

    <div style="width: 90%;;margin: 70% auto">
        @if(session('Message'))
            <div class="alert-info" >
                {{session('Message')}}
            </div>
        @endif
        <form action="search" method="post">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input class="form-control col-md-10" placeholder="Search..." name="searchData" >
            <input type="submit" class="btn btn-primary col-md-2" value="Search">

        </form>
        <a href="/create" class="btn btn-success">Create Post</a>
        @foreach($data as $item)
            <li class="list-group-item">{{$item['title']}}
                <a href="/show/{{$item['id']}}">Show</a> |
                <a href="/delete/{{$item['id']}}">delete</a> |
                <a href="/edit/{{$item['id']}}">edite</a>
            </li>
        @endforeach

    </div>
@endsection