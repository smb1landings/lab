<?php
$path=$_SERVER['REQUEST_URI'];
$titlePage="";
$descriptionPage="";
$headerPrincipal="";
$urlPromotions="https://www.servicioshuman.mx/tarjetasmb/red-comercial.html?secc1=red-comercial_restaurantesYbares";
$keyWords="Promociones restaurantes";
if($path="/restaurante" || $path="/restaurante/"){
    $urlCanonical="https://promocionessmb.com/restaurante/";
    $ogUrl="https://promocionessmb.com/restaurante/index.html";
    $ogImage="https://promocionessmb.com/restaurante/img/familiar-tarjeta-smb.png";
    $titlePage="Promociones restaurantes | Membresía familiar SMB";
    $titleHeaderPrincipal='Promociones en restaurantes hasta en un <span class="red-text">50% de descuento</span>. ';
	$descriptionPage=$headerPrincipal;
	$urlContent="restaurante.php";
}
include_once ("fragment/header.php");
include_once ("fragment/content.php");
include_once("fragment/footer.php");
?>