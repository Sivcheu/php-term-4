@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">{{$event->title}}</h1>
    <h6>All visitor {{$allVolunteer}}</h6>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($volunteerDetail as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->phone_number}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
