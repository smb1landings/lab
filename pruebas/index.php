<?php
$titlePage='Pruebas';
$path=$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="es-MX">
<?php include 'header.php';
if(
        $path=="/buffet"
)
    echo ".$headbuffet." ;

if (
        $path=="/tapas"
)
    echo ".headtapas";
    else
        echo "nope"
    ?>
<?php include_once 'body.php'?>
</html>

/**
 * Created by PhpStorm.
 * User: admin.sistemas
 * Date: 02/10/2018
 * Time: 01:02 PM
 */