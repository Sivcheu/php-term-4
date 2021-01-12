@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">All user</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $item)
            <tr class="table-info">
                <th>{{$item->id}}</th>
                <td>{{$item->firstname}}</td>
                <td>{{$item->lastname}}</td>
                <td>{{$item->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
