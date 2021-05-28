<?php
session_start();
?>
<html>
    <head>
        <title>Tela de Login</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            html,
            body {
                height: 100%;
            }
            html {
                display: table;
                margin: auto;
            }
            body {
                display: table-cell;
                vertical-align: middle;
                background: #4ECDC4;
            }

            #login-page {
                width: 500px;
            }

            .card {
                /*      position: absolute;
                     left: 50%;
                     top: 50%;
                     -moz-transform: translate(-50%, -50%)
                     -webkit-transform: translate(-50%, -50%)
                     -ms-transform: translate(-50%, -50%)
                     -o-transform: translate(-50%, -50%)
                     transform: translate(-50%, -50%); */
            }
        </style>
    </head>
    <body>
        <div id="login-page" class="row">
            <div class="col s12 z-depth-6 card-panel">
                <form class="login-form" method="post" action="valida.php"> 
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail_outline</i>
                            <input class="validate" name="txtUsuario" type="email">
                            <label for="txtUsuario" data-error="wrong" data-success="right">
                                <span id="spValidaUsuario"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input name="txtSenha" type="password">
                            <label for="txtSenha">
                                <span class="spValidaSenha"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">          
                        <div class="input-field col s12 m12 l12  login-text">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Remember me</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="Login" name="btnSubmit" id="btnSubmit" class="btn waves-effect waves-light col s12">

                        </div>
                    </div>       
                    <p class="red-text text-darken-4">
                        <?php
                        if (isset($_SESSION['loginErro'])) {
                            echo $_SESSION['loginErro'];
                            unset($_SESSION['loginErro']);
                        }
                        ?>
                    </p>
                </form>
            </div>
        </div>         
    </body>
</html>
