@extends('layouts.wrapper')

@section('ct')
    @if(\Illuminate\Support\Facades\Session::has('loginFirst'))
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{\Illuminate\Support\Facades\Session::get('loginFirst')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row mb-3 mt-3 ml-1">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>

                            <div class="row mb-3 mt-3 ml-1">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>

                            <div class="reg">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
