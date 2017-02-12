<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PDV Web -  Dashboard</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/script.js"></script>
</head>
<body>

<!-- TOP BAR -->
<?php include_once("tpl/top_bar.php"); ?>
<!-- end top-bar -->


<!-- HEADER -->
<div id="header-with-tabs">

    <div class="page-full-width cf">

<?php require_once ("mainmenu.php");?>
        <!-- end tabs -->

        <!-- Change this image to your own company's logo -->
        <!-- The logo will automatically be resized to 30px height. -->
        <a href="#" id="company-branding-small" class="fr"><img src="<?php if (isset($_SESSION['logo'])) {
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

    <div class="page-full-width cf">

        <div class="side-menu fl">

            <h3>ACESSO RÁPIDO</h3>
            <ul>
                <li><a href="add_sales.php">Efetuar Venda</a></li>
                <li><a href="add_purchase.php">Efetuar Compra</a></li>
                <li><a href="add_supplier.php">Adicionar Fornecedor</a></li>
                <li><a href="add_customer.php">Adicionar Cliente</a></li>
                <li><a href="view_report.php">Relatórios</a></li>
            </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">ESTATÍSTICAS</h3>
                    <span class="fr expand-collapse-text">CLIQUE PARA FECHAR</span>
                    <span class="fr expand-collapse-text initial-expand">CLIQUE PARA ABRIR</span>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">

                    <?php
                    if (isset($_POST['old_pass']) and isset($_POST['new_pass']) and isset($_POST['confirm_pass'])) {
                        $username = $_SESSION['username'];
                        $old_pass = $_POST['old_pass'];
                        $count = $db->countOf("stock_user", "username='$username' and password='$old_pass'");
                        if ($count == 0) {
                            echo "<br><font color=red size=6px >Senha antiga incorreta!</font>";
                        } else {
                            if (trim($_POST['new_pass']) == trim($_POST['confirm_pass'])) {
                                $con = $_POST['confirm_pass'];
                                $db->query("update stock_user  SET password='$con' where username='$username'");
                                echo "<br><font color=green size=6px >Senha atualizada com sucesso!</font>";
                            } else {
                                echo "<br><font color=red size=6px >Confirmação de senha incorreta!</font>";
                            }
                        }
                    }
                    ?>
                    <form action="" method="post">
                        <table style="width:600px; margin-left:50px; float:left;" border="0" cellspacing="0"
                               cellpadding="0">

                            <tr>
                                <td>Senha atual</td>
                                <td><input type="password" name="old_pass" readonly="readonly"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Senha Nova</td>
                                <td><input type="password" name="new_pass" readonly="readonly"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Confirmação da Senha Nova</td>
                                <td><input type="password" name="confirm_pass" readonly="readonly"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>
                                    <input class="button round blue image-right ic-add text-upper" type="submit"
                                           name="Submit" name="change_pass" value="Gravar">
                                </td>
                                <td>
                                    <input class="button round red   text-upper" type="reset" name="Reset"
                                           value="Limpar"></td>
                            </tr>

                        </table>
                    </form>
                    <!--<ul class="temporary-button-showcase">
                                        <li><a href="#" class="button round blue image-right ic-add text-upper">Add</a></li>
                                        <li><a href="#" class="button round blue image-right ic-edit text-upper">Edit</a></li>
                                        <li><a href="#" class="button round blue image-right ic-delete text-upper">Delete</a></li>
                                        <li><a href="#" class="button round blue image-right ic-download text-upper">Download</a></li>
                                        <li><a href="#" class="button round blue image-right ic-upload text-upper">Upload</a></li>
                                        <li><a href="#" class="button round blue image-right ic-favorite text-upper">Favorite</a></li>
                                        <li><a href="#" class="button round blue image-right ic-print text-upper">Print</a></li>
                                        <li><a href="#" class="button round blue image-right ic-refresh text-upper">Refresh</a></li>
                                        <li><a href="#" class="button round blue image-right ic-search text-upper">Search</a></li>
                                    </ul>-->

                </div>
                <!-- end content-module-main -->


            </div>
            <!-- end content-module -->


        </div>
        <!-- end full-width -->

    </div>
</div>


<!-- FOOTER -->
<div id="footer">
    <p>Nome da Empresa - www.nomedaempresa.com.br</a>.
    </p>

</div>
<!-- end footer -->

</body>
</html>