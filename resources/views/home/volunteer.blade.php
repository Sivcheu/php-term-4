@extends('layouts.wrapper')

@section('ct')
    @if(\Illuminate\Support\Facades\Session::has('VolJoinFail'))
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{\Illuminate\Support\Facades\Session::get('VolJoinFail')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">JoinVolunteer</div>
                    <div class="card-body">
                        <form action="/vol-join" method="POST">
                            @csrf
                            <input type="hidden" name="event_id" value={{$event->id}}>
                            <div class="row mb-3 mt-3 ml-1">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3 ml-1">
                                <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="phone" name="phone_number" min="0" max="9999999999"
                                           required>
                                </div>
                            </div>

                            <div class="reg text-center">
                                <button type="submit" class="btn btn-primary ">
                                    JoinNow
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
