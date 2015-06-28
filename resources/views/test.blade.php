@extends('layout')

@section('content')
    @foreach($users as $user)
        @if( isset($user->image) )
            <img src="{{$user->image}}" alt="{{$user->name}}"/>
        @endif
        <br />
        {{$user->name}}
        <br />
    @endforeach
@stop