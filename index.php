<?php
session_start();
if (!file_exists("config.php") || !include_once "config.php") {
    header("location: install_step1.php");
}
if (!defined('posnicEntry')) {
    define('posnicEntry', true);
}
if (isset($_SESSION['username'])) {
    if ($_SESSION['usertype'] == 'admin') // if session variable "username" does not exist.
        header("location: dashboard.php"); // Re-direct to index.php
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PDV Web -  Login to Control Panel</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cmxform.css">
    <link rel="stylesheet" href="js/lib/validationEngine.jquery.css">

    <!-- Scripts -->
    <script src="js/lib/jquery.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<!--    Only Index Page for Analytics   -->

<!-- TOP BAR -->
<div id="top-bar">

    <div class="page-full-width">

        <!--<a href="#" class="round button dark ic-left-arrow image-left ">See shortcuts</a>-->

    </div>
    <!-- end full-width -->

</div>
<!-- end top-bar -->


<!-- HEADER -->
<div id="header">

    <div class="page-full-width cf">

        <div id="login-intro" class="fl">

            <h1>Autenticação</h1>
            <h5>Use suas credenciais abaixo</h5>

        </div>
        <!-- login-intro -->

        <!-- Change this image to your own company's logo -->
        <!-- The logo will automatically be resized to 39px height. -->
        <a href="#" id="company-branding" class="fr"><img src="<?php if (isset($_SESSION['logo'])) {
                echo "upload/" . $_SESSION['logo'];
            } else {
                echo "upload/posnic.png";
            } ?>" alt="PDV Web"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <form action="checklogin.php" method="POST" id="login-form" class="cmxform" autocomplete="off">

        <fieldset>
            <p> <?php

                if (isset($_REQUEST['msg']) && isset($_REQUEST['type'])) {

                    if ($_REQUEST['type'] == "error")
                        $msg = "<div class='error-box round'>" . $_REQUEST['msg'] . "</div>";
                    else if ($_REQUEST['type'] == "warning")
                        $msg = "<div class='warning-box round'>" . $_REQUEST['msg'] . "</div>";
                    else if ($_REQUEST['type'] == "confirmation")
                        $msg = "<div class='confirmation-box round'>" . $_REQUEST['msg'] . "</div>";
                    else if ($_REQUEST['type'] == "information")
                        $msg = "<div class='information-box round'>" . $_REQUEST['msg'] . "</div>";

                    echo $msg;
                }
                ?>

            </p>

            <p>
                <label for="login-username">Usuário</label>
                <input type="text" id="login-username" class="round full-width-input"
                       name="username" autofocus/>
            </p>

            <p>
                <label for="login-password">Senha</label>
                <input type="password" id="login-password" name="password"
                       class="round full-width-input"/>
            </p>

            <a href="forget_pass.php" class="button ">Esqueceu a senha?</a>

            <!--<a href="dashboard.php" class="button round blue image-right ic-right-arrow">LOG IN</a>-->
            <input type="submit" class="button round blue image-right ic-right-arrow" name="submit" value="Entrar"/>
        </fieldset>

        <br/>

        <!-- <div class="information-box round">Just click on the "LOG IN" button to continue, no login information
            required.
        </div> -->

    </form>

</div>
<!-- end content -->


<!-- FOOTER -->
<div id="footer">
    <p>Nome da Empresa - www.nomedaempresa.com.br</a>.
    </p>


</div>
<!-- end footer -->

</body>
</html>