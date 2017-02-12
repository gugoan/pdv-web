<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PDV Web -  Relatórios</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/date_pic/date_input.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/date_pic/jquery.date_input.js"></script>
    <script src="js/script.js"></script>
    <script src="js/view_report.js"></script>
    

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

            <h3>Relatórios</h3>
            <ul>
                <ul>
                    <li><a></a></li>

                </ul>
            </ul>


        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Relatórios</h3>
                    <span class="fr expand-collapse-text">CLIQUE PARA FECHAR</span>
                    <span class="fr expand-collapse-text initial-expand">CLIQUE PARA ABRIR</span>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">
                    <form action="">

                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <form action="sales_Relatórios.php" method="post" name="form1" id="form1" name="sales_Relatórios"
                                  id="sales_Relatórios" target="myNewWinsr">
                                <tr>

                                    <td><strong>Sales Relatórios </strong></td>
                                    <td>From</td>
                                    <td><input name="from_sales_date" type="text" id="from_sales_date"
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="to_sales_date" type="text" id="to_sales_date" style="width:80px;">
                                    </td>
                                    <td><div style="padding-left: 15px;"><input class="button round blue image" name="submit" type="button" value="Show" onClick='sales_Relatórios_fn();'>
                                        </div></td>

                                </tr>
                            </form>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action="purchase_Relatórios.php" method="post" name="purchase_Relatórios" target="_blank">
                                <tr>
                                    <td><strong>Purchase Relatórios </strong></td>
                                    <td>From</td>
                                    <td><input name="from_purchase_date" type="text" id="from_purchase_date"
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="to_purchase_date" type="text" id="to_purchase_date"
                                               style="width:80px;"></td>
                                    <td><div style="padding-left: 15px;"><input class="button round blue image" name="submit" type="button" value="Show" onClick='purchase_Relatórios_fn();'>
                                        </div></td>
                                </tr>
                            </form>

                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <form action="sales_purchase_Relatórios.php" method="post" name="sales_purchase_Relatórios"
                                  target="_blank">
                                <tr>
                                    <td><strong>Purchase Stocks </strong></td>
                                    <td>From</td>
                                    <td><input name="from_sales_purchase_date" type="text" id="from_sales_purchase_date"
                                               style="width:80px;"></td>
                                    <td>To</td>
                                    <td><input name="to_sales_purchase_date" type="text" id="to_sales_purchase_date"
                                               style="width:80px;"></td>
                                    
                                    <td><div style="padding-left: 15px;"><input  class="button round blue image" name="submit" type="button" value="Show"
                                                onClick='sales_purchase_Relatórios_fn();'></div></td>
                                </tr>
                            </form>

                        </table>


                </div>
                <!-- end content-module-main -->


            </div>
            <!-- end content-module -->


        </div>
        <!-- end full-width -->

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