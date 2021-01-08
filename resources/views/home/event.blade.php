@extends('layouts.wrapper')

@section('ct')
    <div class="d-flex justify-content-center">
        <h2 class="my-2">Event</h2>
    </div>
    @foreach($events as $event)
        @include('components.event_card')
    @endforeach
@endsection
