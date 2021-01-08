@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">Event Management</h1>
    <div class="d-flex justify-content-center">
        <a href="/event-create" class="btn btn-success">Add an event</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Starting date</th>
            <th scope="col">Ending date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr class="table-info">
                <th>{{$event->id}}</th>
                <td>{{$event->title}}</td>
                <td>{{$event->start}}</td>
                <td>{{$event->end}}</td>
                <td>
                    <a href="/event-edit/{{$event->id}}" class="btn btn-warning">Edit</a>
                    <a href="/event-show/{{$event->id}}" class="btn btn-info">Detail</a>
                    <a href="/event-delete/{{$event->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
