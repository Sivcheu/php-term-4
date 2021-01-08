@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">List All Donors</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">DonorName</th>
            <th scope="col">Amount</th>
            <th scope="col">Organization</th>
            <th scope="col">Total Amount = {{$total}} $</th>
        </tr>
        </thead>
        <tbody>
        @foreach($donors as $donor)
            <tr class="table-info">
                <th>{{$donor->id}}</th>
                <td>{{$donor->lastname}}</td>
                <td>${{$donor->amount}}</td>
                <td>{{$donor->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
