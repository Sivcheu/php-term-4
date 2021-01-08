@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">Create Organization</h1>

    <div class="d-flex justify-content-center">
        <div class="card shadow-sm" style="width: 600px">
            <div class="card-body">
                <form action="{{route('add_org')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{--title--}}
                    <div class="d-flex justify-content-center ">
                        <label for="title">Name</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="text" id="title" name="name" style="width: 300px;" class="shadow-sm rounded form-control" required>
                    </div>
                    {{--des--}}
                    <div class="d-flex justify-content-center ">
                        <label for="description">Description</label>
                    </div>
                    <textarea class="form-control shadow-sm rounded" id="description" rows="3" name="des" required></textarea>

                    {{--image--}}
                    <div class="mb-3 mt-4">
                        <input class="form-control" type="file" name="image" id="formFile">
                    </div>
                    {{--button--}}
                    <div class="d-flex justify-content-center ">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
