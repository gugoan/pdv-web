<?php
include_once("init.php");

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>POSNIC - Update Category</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- jQuery & JS files -->
    <?php include_once("tpl/common_js.php"); ?>
    <script src="js/script.js"></script>
    <script src="js/update_category.js"></script>
   
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
            } ?>" alt="Point of Sale"/></a>

    </div>
    <!-- end full-width -->

</div>
<!-- end header -->


<!-- MAIN CONTENT -->
<div id="content">

    <div class="page-full-width cf">

        <div class="side-menu fl">

                    <h3>Gerenciar Estoque</h3>
                    <ul>
                        <li><a href="add_stock.php">Adic. Estoque/Produto</a></li>
                        <li><a href="view_product.php">Visualizar Estoque/Produto</a></li>
                        <li><a href="view_category.php">Visualizar Categoria</a></li>
                        <li><a href="view_stock_availability.php">Visualizar Disponibilidade</a></li>
                    </ul>

        </div>
        <!-- end side-menu -->

        <div class="side-content fr">

            <div class="content-module">

                <div class="content-module-heading cf">

                    <h3 class="fl">Atualizar Categoria de Estoque/Produto</h3>
                    <span class="fr expand-collapse-text">CLIQUE PARA FECHAR</span>
                    <span class="fr expand-collapse-text initial-expand">CLIQUE PARA ABRIR</span>

                </div>
                <!-- end content-module-heading -->

                <div class="content-module-main cf">
                    <form name="form1" method="post" id="form1" action="">
                        <p><strong>Adic. Estoque </strong> - Adic. Novo ( Control + 3)</p>
                        <table class="form" border="0" cellspacing="0" cellpadding="0">
                            <?php
                            if (isset($_POST['id'])) {

                                $id = mysqli_real_escape_string($db->connection, $_POST['id']);
                                $name = trim(mysqli_real_escape_string($db->connection, $_POST['name']));
                                $address = trim(mysqli_real_escape_string($db->connection, $_POST['address']));


                                if ($db->query("UPDATE category_details  SET category_name='$name',category_description='$address' where id='$id'"))
                                    echo "<br><font color=green size=+1 > [ $name ] Categoria atualizado com!</font>";
                                else
                                    echo "<br><font color=red size=+1 >Erro ao Gravar !</font>";


                            }

                            ?>
                            <?php
                            if (isset($_GET['sid']))
                                $id = $_GET['sid'];

                            $line = $db->queryUniqueObject("SELECT * FROM category_details WHERE id=$id");
                            ?>
                            <form name="form1" method="post" id="form1" action="">
                                <input name="id" type="hidden" value="<?php echo $_GET['sid']; ?>">
                                <tr>
                                    <td>Nome</td>
                                    <td><input name="name" type="text" id="name" maxlength="200"
                                               class="round default-width-input"
                                               value="<?php echo $line->category_name; ?> "/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Descrição</td>
                                    <td><textarea name="address" cols="15"
                                                  class="round full-width-textarea"><?php echo $line->category_description; ?></textarea>
                                    </td>

                                </tr>


                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input class="button round blue image-right ic-add text-upper" type="submit"
                                               name="Submit" value="Gravar">
                                        (Control + S)
                                    </td>
                                    <td align="right"><input class="button round red   text-upper" type="reset"
                                                             name="Reset" value="Reset"></td>

                                </tr>
                        </table>
                    </form>


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