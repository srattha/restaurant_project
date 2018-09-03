@extends('layouts.app')
@section('css')
<style>
.white{
  color:#000;
  background-color:#fff;
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
          <h3 class="panel-title"><i class="fa fa-user-circle-o" aria-hidden="true"></i> เข้าสู่ระบบ</h3>
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
       <button class="btn btn-lg btn-block" type="button" onclick="location.href='{{ route('login.facebook') }}'" style=" background-color: #3b5998!important;
       color: #fff!important;"> <i class="fa fa-facebook-official" aria-hidden="true"></i> Login facebook</button>

     </div>
     <button type="button" class="btn btn-lg btn-primary btn-block" onclick="location.href='{{ route('register') }}'">ลงทะเบียนใช้งาน</button>
   </div>
 </div>
</div>
</div>
@endsection
