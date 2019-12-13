@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="border-radius: 0rem;">
                <h3 class="login-header text-center" style="padding-top: 2rem; padding-bottom: 2rem;">{{ __('Member Login') }}</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <!-- <label for="email" class="label"style="margin-bottom: 0rem;" >{{ __('Email') }}</label> -->
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" style="border: none;
  border-bottom: 2px solid gray; border-radius: 0px; padding: 0px 20px 0px 0px;" required autofocus>
                        </div>
                        <div class="form-group">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" 
                          style="border: none;
  border-bottom: 2px solid gray; border-radius: 0px; padding: 0px 20px 0px 0px;">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group text-center" style="margin-top: 3rem;">
                            <button type="submit" class="btn btn-primary submit-btn" style="background-color: #000; border-radius: 2px;">
                                {{ __('LOGIN') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
