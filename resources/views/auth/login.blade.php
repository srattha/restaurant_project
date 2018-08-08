@extends('layouts.app')
@section('css')
<style>
.white{
    color:#000;
    background-color:#fff;
}

.btn-facebook {
    color: #ffffff;
    -webkit-text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #2b4b90;
    *background-color: #133783;
    background-image: -moz-linear-gradient(top, #3b5998, #133783);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#3b5998), to(#133783));
    background-image: -webkit-linear-gradient(top, #3b5998, #133783);
    background-image: -o-linear-gradient(top, #3b5998, #133783);
    background-image: linear-gradient(to bottom, #3b5998, #133783);
    background-repeat: repeat-x;
    border-color: #133783 #133783 #091b40;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3b5998', endColorstr='#ff133783', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-facebook:hover,
.btn-facebook:focus,
.btn-facebook:active,
.btn-facebook.active,
.btn-facebook.disabled,
.btn-facebook[disabled] {
    color: #ffffff;
    background-color: #133783 !important;
    *background-color: #102e6d !important;
}

.btn-facebook:active,
.btn-facebook.active {
    background-color: #0d2456 \9 !important;
}
</style>

@endsection
@section('content')
<div class="container">
<!--     <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="offer offer-default">
                <div class="shape">
                </div>
                <div class="offer-content">
                    <div style="text-align: center; padding: 10px;">
                     <img src="/assets/img/man.png">
                 </div>

                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                      <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                  </div>
                  @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <br>
                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                  <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
              </div>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div> -->
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">เข้าสู่ระบบ</h3>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <fieldset>

                        <div class="form-group">
                           <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                              <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                              <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                          </div>
                          @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                          <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                          <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                      </div>
                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>
                        <div class="checkbox">
                            <label>
                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit"> <i class="fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ</button>
                    </fieldset>
                </form>
                <hr/>
                <center><h4>OR</h4></center>
                <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
            </div>
        </div>
    </div>
</div>
</div>
@endsection
