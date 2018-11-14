<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Londinium - premium responsive admin template by Eugene Kopyov</title>

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/londinium-theme.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="{{asset('js/plugins/charts/sparkline.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/forms/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/autosize.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/inputlimit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/listbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/tags.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/switch.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/forms/uploader/plupload.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/uploader/plupload.queue.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/forms/wysihtml5/wysihtml5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/wysihtml5/toolbar.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/interface/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/jgrowl.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/timepicker.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/application.js')}}"></script>
<style type="text/css">
    .login-wrapper{
        display: flex;
        justify-content: center;
        align-items: center;
        position: static;   
        width: 100%;
    /* left: 50%; */
    /* top: 50%; */
    /* width: 300px; */
    margin-left: 0px;
    margin-top: 20px;
    padding-bottom: 46px;

    }
    .register_form{
        width: 500px;
    }

</style>
</head>

<body class="full-width page-condensed">

    <!-- Navbar -->
    <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right">
                <span class="sr-only">Toggle navbar</span>
                <i class="icon-grid3"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a>
        </div>

        <ul class="nav navbar-nav navbar-right collapse">
            <li><a href="#"><i class="icon-screen2"></i></a></li>
            <li><a href="#"><i class="icon-paragraph-justify2"></i></a></li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                <ul class="dropdown-menu icons-right dropdown-menu-right">
                    <li><a href="#"><i class="icon-cogs"></i> This is</a></li>
                    <li><a href="#"><i class="icon-grid3"></i> Dropdown</a></li>
                    <li><a href="#"><i class="icon-spinner7"></i> With right</a></li>
                    <li><a href="#"><i class="icon-link"></i> Aligned icons</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- navbar -->


    
    <!-- Login wrapper -->
    <div class="login-wrapper">
        <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
        <div class="register_form">
            <div class="popup-header">
                <a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
                <span class="text-semibold">User Register </span>
                <div class="btn-group pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                        <li><a href="#"><i class="icon-people"></i> Change user</a></li>
                        <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
                        <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
                        <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
                    </ul>
                </div>
            </div>
            @if(@session('response'))
                <div class="col-md-8 alert alert-success"> 
                {{ @session('success')}}
            </div>
            @endif
            <div class="well">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>First Name:</label>
                                    <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                     @if ($errors->has('firs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                                </div>

                              
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Last Name:</label>
                                    <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
                                     @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                                </div>
                              
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>UserName:</label>
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('last_name') }}" required autofocus>
                                     @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                                </div>
                              
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="row">

                                <div class="col-md-12">
                                    <label>Email:</label>
                                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                              
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label >Password</label>
                            <div class="row">
                                  <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</div>
                        <div class="form-group">
                            <label >Confirm Password</label>

                            <div class="row">
                                  <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Phone:</label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>
                                     @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                </div>

                              
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="row">
                                  <div class="col-md-12">
                                    <label>Address:</label>
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
                                     @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                </div>

                              
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                            <div class="row">
                                  <div class="col-md-12">
                                    <label>Qualification:</label>
                                    <input id="address" type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" required autofocus>
                                     @if ($errors->has('qualification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qualification') }}</strong>
                                    </span>
                                @endif
                                </div>

                              
                            </div>
                        </div>
                 <!-- <div class="form-group{{ $errors->has('referral') ? ' has-error' : '' }}">
                            <div class="row">
                                  <div class="col-md-12">
                                    <label>Referral:</label>
                                    <input id="address" type="text" class="form-control" name="referral" value="{{ old('referral') }}" required autofocus>
                                     @if ($errors->has('referral'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('referral') }}</strong>
                                    </span>
                                @endif
                                </div>

                              
                            </div>
                        </div> -->
                           <div class="form-group">
                            <div class="row">
                                  <div class="col-md-12">
                                    <label>Copon:</label>
                                    <input id="address" type="text" class="form-control" name="coupon" value="" required autofocus>
                                </div>

                              
                            </div>
                        </div>




                    


                        <div class="form-actions text-right">
                          
                            <a href="{{ route('/') }}" type="button" class="btn btn-warning">
                                    Sign In
                                </a>
                       
                          
                            <button type="submit" class="btn btn-primary">
                                    Register Now
                                </button>
                        </div>
            </div>
        </div>
        <!-- </form> -->
    </div>  
    <!-- login wrapper -->

    <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2013. Londinium Admin Template by <a href="http://themeforest.net/user/Kopyov">Eugene Kopyov</a></div>
        <div class="pull-right icons-group">
            <a href="#"><i class="icon-screen2"></i></a>
            <a href="#"><i class="icon-balance"></i></a>
            <a href="#"><i class="icon-cog3"></i></a>
        </div>
    </div>
    <!-- /footer -->


</body>
</html>