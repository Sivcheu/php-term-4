@extends('layouts.wrapper')

@section('ct')
    <div class="d-flex justify-content-center">
        <h2 class="my-2">Organization</h2>
    </div>
    @foreach($orgs as $org)
        <div class="d-flex justify-content-center">
            <div class="card text-center shadow mt-2 mb-2" style="width: 1160px; height: fit-content">
                <div class="card-body">
                    <h5>
                        {{$org->name}}
                    </h5>
                    <p class="card-text cs-p-donation">
                        {{$org->des}}
                    </p>
                    <img src="{{asset('image/'.$org->image)}}" alt="" class="event-image">
                </div>

                <div class="text-center mb-3">
                    <a href="donationForm/{{$org->id}}" class="btn btn-outline-success">
                        Donate Now
                    </a>
                </div>
            </div>
        </div>

    @endforeach
@endsection
