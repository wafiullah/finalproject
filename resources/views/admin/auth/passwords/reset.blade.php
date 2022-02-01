<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Forgot Password</title>
    <!-- Vendor css -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slim.css')}}">
</head>

<body>
    <div class="signin-wrapper">
        <div class="signin-box">

            <h2 class="slim-logo"><a href="{{ route('admin.login') }}">Admin Password Recovery<span>.</span></a></h2>
            <h2 class="signin-title-primary">{{ __('Reset Password') }}</h2>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('admin.password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <input type="email" required value="{{ old('email') }}" autofocus name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        placeholder="Enter your email">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group ">
                    <input type="password" required class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" placeholder="Enter your password">
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group mg-b-50">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"
                        required>
                </div>
                <button class="btn btn-primary btn-block btn-signin"> {{ __('Reset Password') }}</button>
            </form>
        </div>
    </div>
</body>

</html>
