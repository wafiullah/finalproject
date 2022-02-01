<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
    <!-- Vendor css -->
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slim.css')}}">
</head>

<body>
    <div class="signin-wrapper">
        <div class="signin-box">

        <h2 class="slim-logo"><a href="{{ route('admin.login') }}">Admin Login<span>.</span></a></h2>
            <h3 class="signin-title-secondary">Sign in to continue.</h3>
            @if (Session::get('error'))
            <div class="alert alert-danger">{!! Session::get('error') !!}</div>
            @endif @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0px;">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.authenticate') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group mg-b-50">
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>
                <button class="btn btn-primary btn-block btn-signin">Sign In</button>
            </form>
            <a class="mg-b-0" href="{{ route('admin.password.request') }}">{{ __('Forgot Your Password?') }} </a>
        </div>
    </div>
</body>

</html>