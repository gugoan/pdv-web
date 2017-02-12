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
        <?php $line = $db->queryUniqueObject("SELECT * FROM store_details ");
        $_SESSION['logo'] = $line->log;
        ?>
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


                    <table style="width:300px; float:left;" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="250" align="left">&nbsp;</td>
                            <td width="150" align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total de Produtos</td>
                            <td align="left"><?php echo $count = $db->countOfAll("stock_avail"); ?>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total de Vendas</td>
                            <td align="left"><?php echo $count = $db->countOfAll("stock_sales"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total de Fornecedores</td>
                            <td align="left"><?php echo $count = $db->countOfAll("supplier_details"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">Total de Clientes</td>
                            <td align="left"><?php echo $count = $db->countOfAll("customer_details"); ?></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                    </table>

                    <table style="width:550px; margin-left:50px; float:left;" border="0" cellspacing="0"
                           cellpadding="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="250" align="left">Painel (Ctrl+0)</td>
                            <td width="150" align="left">Efetuar Compra(Ctrl+1)</td>


                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td width="250" align="left">Adic. Estoque(Ctrl+2)</td>
                            <td align="left">Adic. Venda(Ctrl+)</td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left">Adic. Categoria (Ctrl+4 )</td>
                            <td align="left">Adic. Fornecedor (Ctrl+5 )</td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left">Adic. Cliente (Ctrl+6)</td>
                            <td align="left">Visualizar Estoque (Ctrl+7)</td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left">Visualizar Vendas(Ctrl+8)</td>
                            <td align="left">Visualizar Compras (Ctrl+9)</td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left">Adic. Novo (Ctrl+a)</td>
                            <td align="left">Gravar( Ctrl+s )</td>

                        </tr>

                    </table>
                    <!-- <ul class="temporary-button-showcase">
                        <li><a href="#" class="button round blue image-right ic-add text-upper">Add</a></li>
                        <li><a href="#" class="button round blue image-right ic-edit text-upper">Edit</a></li>
                        <li><a href="#" class="button round blue image-right ic-delete text-upper">Delete</a></li>
                        <li><a href="#" class="button round blue image-right ic-download text-upper">Download</a></li>
                        <li><a href="#" class="button round blue image-right ic-upload text-upper">Upload</a></li>
                        <li><a href="#" class="button round blue image-right ic-favorite text-upper">Favorite</a></li>
                        <li><a href="#" class="button round blue image-right ic-print text-upper">Print</a></li>
                        <li><a href="#" class="button round blue image-right ic-refresh text-upper">Refresh</a></li>
                        <li><a href="#" class="button round blue image-right ic-search text-upper">Search</a></li>
                    </ul> -->

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