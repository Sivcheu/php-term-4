@extends('layouts.sidebar')

@section('content')
    <h1>{{$org->name}}</h1>
    <p>{{$org->des}}</p>
    <img src="{{asset('image/'.$org->image)}}" alt="" width="500px">
@endsection
