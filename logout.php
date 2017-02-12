<?php
session_start();
session_destroy();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["usertype"]);
header("location: index.php?msg=Desconectado%20do%20sistema!&type=information");
?>