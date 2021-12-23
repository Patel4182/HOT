<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Login | Organ Transplant</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="{{asset('logreg/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('logreg/css/style.css')}}">
    </head>
    <body>
            <!-- Sing in  Form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="{{asset('logreg/images/2.jpg')}}" alt="sing up image" style="height:500px;"></figure>
                           
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Login Here</h2>
                            @if($errors->any())
                                @include('errors.error')
                            @endif
                            <form action="{{route('login')}}" method="post" class="register-form">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" placeholder="Enter Email" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" autocomplete="off" placeholder="Enter Password" name="password" required/>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                    <p><a href="{{ url('/password/reset') }}"  class="forget-password">Forgot Password?</a></p>
                                    
                                </div> -->
                              
                                <div class="form-group form-button">
                                    <input type="submit" class="form-submit" value="Log in"/>
                                </div>
                                
                            </form>
                            <p class="signup-image-link">Not Registered? <a href="{{route('dregister')}}">Register Here(For Doctor)</a><br>
                                Not Registered? <a href="{{route('hregister')}}">Register Here(For Hospital)</a><br>
                               </p>
                        
                            </div>
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