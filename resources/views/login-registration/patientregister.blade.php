<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('hospital/assets/img/favicon.ico')}}">
    <title>Registration | Patient</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('logreg/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('logreg/css/style.css')}}">

    <!-- Captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
    <body>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                    @if($errors->any())
                        @include('errors.error')
                    @endif
                        <h2 class="form-title">Bllodbank Registration</h2>
                        <form method="POST" class="register-form" action="{{route('pregister')}}">
                        {{csrf_field()}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="name" value="{{ old('name') }}" required/>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('Confirm_password') ? ' has-error' : '' }}">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Confirm Password" name="Confirm_password" required/>
                                    @if ($errors->has('Confirm_password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Confirm_password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                    </div>
                        <div class="signup-image">
                            <figure><img src="{{asset('logreg/images/patient.png')}}" alt="sing up image"></figure>
                            <p class="signup-image-link">Have Alreaddy an Account?<a href="{{route('login')}}">Login Here</a></p>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Register"/>
                            </div>
                            <span class="social-label">Or Register with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- JS -->
        <script src="{{asset('logreg/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('logreg/js/main.js')}}"></script>
        <script>
            @if(Session::has('notification'))
                var type = "{{ Session::get('notification.alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('notification.message') }}");
                        break;
                    
                    case 'warning':
                        toastr.warning("{{ Session::get('notification.message') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('notification.message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('notification.message') }}");
                        break;
                }
            @endif
        </script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>