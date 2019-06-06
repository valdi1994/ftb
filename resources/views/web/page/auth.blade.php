@extends('web.web')

@section('content')
    <div class="col_one_third nobottommargin">

        <div class="well well-lg nobottommargin">
            <form id="login-form" name="login-form" class="nobottommargin" action="{{route('login')}}" method="post">
                {{ csrf_field() }}
                <h3>Login to your Account</h3>

                <div class="col_full">
                    <label for="email">Username:</label>
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required
                           autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="col_full">
                    <label for="password">Password:</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="col_full nobottommargin">
                    <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit"
                            value="login">Login
                    </button>
                    <a href="{{route('password.request')}}" class="fright">Forgot Password?</a>
                </div>

            </form>
        </div>

    </div>

    <div class="col_two_third col_last nobottommargin">


        <h3>Don't have an Account? Register Now.</h3>

        <form id="register-form" name="register-form" class="nobottommargin" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <div class="col_half">
                <label for="email">Email Address:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="username">Username:</label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required
                       autofocus>

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="clear"></div>

            <div class="col_half">
                <label for="password">Choose Password:</label>
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col_half col_last">
                <label for="password-confirm">Re-enter Password:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="clear"></div>

            <div class="col_full nobottommargin">
                <button class="button button-3d nomargin" id="register-form-submit"
                        name="register-form-submit" value="register">Register Now
                </button>
            </div>

        </form>

    </div>
@stop