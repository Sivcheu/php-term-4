@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">All feedback</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Feedback</th>
        </tr>
        </thead>
        <tbody>
        @foreach($feedback as $item)
            <tr class="table-info">
                <th>{{$item->id}}</th>
                <td>{{$item->feedback}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
