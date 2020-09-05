@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class=" ">
        <div class="">
            <div class="card   border-form ">
                <div class="card-header border-primary border-width text-center">{{ __('Login') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="border-custom mb-3">
                                @error('email')
                                    <span class="invalid-feedback d-block text-center mb-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="input-group  ">
                                    <div class="input-group-append ">
                                        <span class="input-group-text border-0 "><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="email" name="email" class="text-center container-fluid  border-0 p-1 bg-transparent  @error('email') is-invalid @enderror" placeholder="Email..." class="form-control">

                                </div>
                            </div>
                            <div class="border-custom ">
                                @error('password')
                                    <span class="invalid-feedback mb-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-group  ">
                                    <div class="input-group-append ">
                                        <span class="input-group-text border-0 "><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="password" name="password" class="text-center container-fluid  border-0 p-1 bg-transparent  @error('password') is-invalid @enderror" placeholder="Password..." class="form-control">

                                </div>
                            </div>

                        <button class="container-fluid btn btn-primary  mt-4" value="add" type="submit">{{__('Login')}}</button>
                    </form>
                    @guest


                        <a class="nav-link text-center pt-3" href="{{ route('register') }}">{{ __('Register') }}</a>


                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
