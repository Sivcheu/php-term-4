@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">Volunteer</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">VolunteerName</th>
            <th scope="col">PhoneNumber</th>
            <th scope="col">Event Title</th>
            <th scope="col">Starting Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($volunteer as $item)
            <tr class="table-info">
                <th>{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->start}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
