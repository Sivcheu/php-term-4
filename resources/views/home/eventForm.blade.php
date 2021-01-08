@extends('layouts.wrapper')

@section('ct')
    <div class="text-center">
        <h1>{{$event->title}}</h1>
        <p>{{$event->description}}</p>
        <h5>{{$event->start}}</h5>
        <h5>{{$event->end}}</h5>
        <img src="{{asset('image/'.$event->image)}}" alt="" width="500px">
    </div>
@endsection
