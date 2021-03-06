@extends('_Master')

@section('content')
@if($errors->any())
    @foreach($errors->all() as $e)
        <li>{{$e}}</li>
    @endforeach
@endif

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="fname" value="{{ old('fname') }}">
    </div>
    <div>
        Name
        <input type="text" name="lname" value="{{ old('lname') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
@endsection