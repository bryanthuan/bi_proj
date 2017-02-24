@extends('layouts.app')

@section('title','Login')

@section('stylesheet')
 <style>
    .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
    position: initial;
    margin-left: initial;
}
</style>
@endsection

@section('content')
<div class="container">
                    <form class="form-signin" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
        
                        <h2 class="form-signin-heading">sign in now</h2>
                            <div class="login-wrap">
                                <div class="user-login-info">
                                    <input id="email" type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <label class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

                            </div>
                    </form>
               
    </div>
@endsection
