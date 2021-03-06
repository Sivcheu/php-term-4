@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">{{$event->title}}</h1>
    <h6>All visitor {{$allVisitor}}</h6>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visitorDetail as $item)
            <tr>
                <td>{{$item->lastname}}</td>
                <td>{{$item->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
