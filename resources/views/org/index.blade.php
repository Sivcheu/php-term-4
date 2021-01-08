@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">Organization</h1>
    <div class="d-flex justify-content-center">
        <a href="/org-create" class="btn btn-success">Add new organization</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orgs as $org)
            <tr class="table-info">
                <th>{{$org->id}}</th>
                <td>{{$org->name}}</td>
                <td>
                    <a href="/org-edit/{{$org->id}}" class="btn btn-warning">Edit</a>
                    <a href="/org-show/{{$org->id}}" class="btn btn-info">Detail</a>
                    <a href="/org-delete/{{$org->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
