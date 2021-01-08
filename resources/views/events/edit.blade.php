@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">Create a new event</h1>
    <div class="d-flex justify-content-center">
        <div class="card shadow-sm" style="width: 600px">
            <div class="card-body">
                <form action="{{route('update_event')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$event->id}}">
                    {{--title--}}
                    <div class="d-flex justify-content-center ">
                        <label for="title">Title</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="text" id="title" name="title" style="width: 300px;" class="shadow-sm rounded form-control" required value="{{$event->title}}">
                    </div>
                    {{--des--}}
                    <div class="d-flex justify-content-center ">
                        <label for="description">Description</label>
                    </div>
                    <textarea class="form-control shadow-sm rounded" id="description" rows="3" name="description" required value="{{$event->description}}"></textarea>
                    {{--start and end--}}
                    <div class="row g-3 mt-2">
                        <div class="col">
                            <input type="text" class="form-control" name="start" placeholder="Starting Date" required value="{{$event->start}}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="end" placeholder="Ending Date" required value="{{$event->end}}">
                        </div>
                    </div>
                    {{--image--}}
                    <div class="mb-3 mt-4">
                        <input class="form-control" type="file" name="image" id="formFile" value="{{$event->image}}">
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
