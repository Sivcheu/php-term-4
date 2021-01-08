@extends('layouts.wrapper')
@section('ct')
    <main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Register</div>
                    @if(Session::get('errors')||count( $errors ) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('user-added')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="firstname"
                                           class="form-control @error('title') is-invalid @enderror"
                                           placeholder="First name"
                                           name="firstname" required autofocus>

                                </div>

                                <div class="col">
                                    <input type="text" id="lastname" class="form-control" placeholder="Last name"
                                           name="lastname" @error('lastname') is-invalid @enderror"
                                    value="{{ old('lastname') }}" required autofocus>

                                </div>
                            </div>
                            <div class="row mb-3 mt-3 ml-1">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"
                                           @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                    required autocomplete="email">
                                </div>
                            </div>

                            <div class="row mb-3 mt-3 ml-1">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password"
                                           @error('password') is-invalid @enderror" required
                                    autocomplete="new-password">
                                </div>
                            </div>

                            <div class="reg">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
