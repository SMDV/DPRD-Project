<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/core.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet" type="text/css" >
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/core/app.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container login-cover">

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content pb-20">

                    <!-- Tabbed form -->
                    <div class="tabbable panel login-form width-400">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#basic-tab1" data-toggle="tab"><h6>Sign in</h6></a></li>
                            <li><a href="#basic-tab2" data-toggle="tab"><h6>Register</h6></a></li>
                        </ul>

                        <div class="tab-content panel-body">
                            <div class="tab-pane fade in active" id="basic-tab1">
                                <form action="index.html">
                                    <div class="text-center">
                                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                        <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required="required">
                                        <div class="form-control-feedback">
                                            <i class="icon-user text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group login-options">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" class="styled" checked="checked">
                                                    Remember
                                                </label>
                                            </div>

                                            <div class="col-sm-6 text-right">
                                                <a href="login_password_recover.html">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="basic-tab2">
                                <form action="index.html">
                                    <div class="text-center">
                                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                        <h5 class="content-group">Create new account <small class="display-block">All fields are required</small></h5>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <input type="text" class="form-control" placeholder="Your username">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <input type="password" class="form-control" placeholder="Create password">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-lock text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback has-feedback-left">
                                        <input type="text" class="form-control" placeholder="Your name">
                                        <div class="form-control-feedback">
                                            <i class="icon-mention text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled">
                                                Accept <a href="#">terms of service</a>
                                            </label>
                                        </div>
                                        <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                                    </div>

                                    <button type="submit" class="btn bg-indigo-400 btn-block">Register <i class="icon-circle-right2 position-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /tabbed form -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
