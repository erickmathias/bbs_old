<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BBS | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-logo">
    <a href="{{ url('/home') }}">Welcome to Online <b>Bar Bending</b> Schedule</a>
    <br><br>
</div>
<div class="row">
    <div class="col-md-6">
        <img src="{{URL('public/storage/images/welcome.jpg')}}" style="width:980px; height: 437px;">
    </div>
    <div class="col-md-6">

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership by providing your Company Details</p>

        <form method="post" action="{{ url('/register') }}">
            @csrf


            <div class="col-md-6">
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Company Name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('main_activity') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="main_activity" value="{{ old('main_activity') }}" placeholder="Company Main Activity">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('main_activity'))
                    <span class="help-block">
                        <strong>{{ $errors->first('main_activity') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('postal_address') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="postal_address" value="{{ old('main_activity') }}" placeholder="Postal Address">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('postal_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('postal_address') }}</strong>
                    </span>
                @endif
            </div>
            </div>


            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Company Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('fax') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="fax" value="{{ old('email') }}" placeholder="Fax">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('fax'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fax') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('telephone') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="fax" value="{{ old('telephone') }}" placeholder="Telephone">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('telephone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telephone') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('website') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="website" value="{{ old('website') }}" placeholder="Company Website">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('website'))
                    <span class="help-block">
                        <strong>{{ $errors->first('website') }}</strong>
                    </span>
                @endif
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('municipal') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="municipal" value="{{ old('website') }}" placeholder="Company Municipal">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('municipal'))
                    <span class="help-block">
                        <strong>{{ $errors->first('municipal') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('region') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="region" value="{{ old('region') }}" placeholder="Company Region">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('region'))
                    <span class="help-block">
                        <strong>{{ $errors->first('region') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('national') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="national" value="{{ old('region') }}" placeholder="Company Nationality">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('national'))
                    <span class="help-block">
                        <strong>{{ $errors->first('national') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
    </div>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
