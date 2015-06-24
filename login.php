<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login - Gestor de Proyectos Aguacat</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/favicon.html">

        <script src="assets/modernizr/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="login-page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form-login" action="do_login.php" method="post">
                <h3>Aguacat - Entrada</h3>
                <hr/>

                <?php
                    if (isset($_SESSION['error']) && $_SESSION['error'] == true) {
                        echo '<div class="alert alert-error">';
                        echo '<strong>Error!</strong> en usuario y/o contraseña.';
                        echo '</div>';
                    }
                ?>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" name="usuario" placeholder="Usuario" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="password" name="contrasenia" placeholder="Contraseña" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary input-block-level">Entrar</button>
                    </div>
                </div>
                
                <!-- <p class="clearfix">
                    <a href="#" class="goto-forgot pull-left">Forgot Password?</a>
                    <a href="#" class="goto-register pull-right">Sign up now</a>
                </p> -->
            </form>
            <!-- END Login Form -->

            <!-- BEGIN Forgot Password Form -->
            <form id="form-forgot" action="http://themes.shamsoft.ir/flaty/index.html" method="get" class="hide">
                <h3>Get back your password</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" placeholder="Email" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary input-block-level">Recover</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            </form>
            <!-- END Forgot Password Form -->

            <!-- BEGIN Register Form -->
            <form id="form-register" action="http://themes.shamsoft.ir/flaty/index.html" method="get" class="hide">
                <h3>Sign up</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" placeholder="Email" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" placeholder="Username" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="password" placeholder="Password" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="password" placeholder="Repeat Password" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="remember" /> I accept the <a href="#">user aggrement</a>
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary input-block-level">Sign up</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            </form>
            <!-- END Register Form -->
        </div>
        <!-- END Main Content -->

        <!--basic scripts-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>

        <script type="text/javascript">
            function goToForm(form)
            {
                $('.login-wrapper > form:visible').fadeOut(500, function(){
                    $('#form-' + form).fadeIn(500);
                });
            }
            $(function() {
                $('.goto-login').click(function(){
                    goToForm('login');
                });
                $('.goto-forgot').click(function(){
                    goToForm('forgot');
                });
                $('.goto-register').click(function(){
                    goToForm('register');
                });
            });
        </script>
    </body>
</html>