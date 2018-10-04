<?php
$path=$_SERVER['REQUEST_URI'];
$titlePage="";
$descriptionPage="";
$headerPrincipal="";
$urlPromotions="https://www.servicioshuman.mx/tarjetasmb/red-comercial.html?secc1=red-comercial_restaurantesYbares";
$keyWords="Promociones restaurantes";
if($path=="/restaurante" || $path=="/restaurante/"){
    $urlCanonical="https://promocionessmb.com/restaurante/";
    $ogUrl="https://promocionessmb.com/restaurante/index.html";
    $ogImage="https://promocionessmb.com/restaurante/img/familiar-tarjeta-smb.png";
    $titlePage="Promociones restaurantes | Membresía familiar SMB";
    $titleHeaderPrincipal='Promociones en restaurantes hasta en un <span class="red-text">50% de descuento</span>. ';
	$descriptionPage='Promociones en restaurantes hasta en un 50% de descuento';
	$urlContent="restaurante.php";
    $fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/restaurante/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Frestaurante%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}
if ($path=="/buffet"||$path=="/buffet/") {
    $urlCanonical = "https://promocionessmb.com/buffet/";
    $ogUrl = "https://promocionessmb.com/buffet/index.php";
    $ogImage="https://promocionessmb.com/restaurante/img/familiar-tarjeta-smb.png";
    $titlePage="Promociones en buffet | Membresía familiar SMB";
    $titleHeaderPrincipal='Promociones en buffet hasta en un <span class="red-text">50% de descuento</span>. ';
    $descriptionPage="Promociones en buffet hasta en un 50% de descuento";
    $urlContent="buffet.php";
    $fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/buffet/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Fbuffet%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}
if ($path=="/sushi"||$path=="/sushi/") {
	$urlCanonical = "https://promocionessmb.com/sushi";
	$ogUrl = "https://promocionessmb.com/sushi/index.php";
	$ogImage="https://promocionessmb.com/sushi/img/familiar-tarjeta-smb.png";
	$titlePage="Sushi promociones | Membresía familiar SMB";
	$titleHeaderPrincipal='Compra tu membresía familiar y adquiere promociones en <span class="red-text">sushi</span>. ';
	$descriptionPage="Compra tu membresía familiar y adquiere promociones en sushi";
	$urlContent="sushi.php";
    $fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/sushi/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Fsushi%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}
if ($path=="/tacos"||$path=="/tacos/") {
    $urlCanonical = "https://promocionessmb.com/tacos";
    $ogUrl = "https://promocionessmb.com/tacos/index.php";
    $ogImage="https://promocionessmb.com/tacos/img/familiar-tarjeta-smb.png";
    $titlePage="Promociones Tacos | Membresía familiar SMB";
    $titleHeaderPrincipal='Con tu membresia famiiar SMB consigue hasta el <span class="red-text">16%</span>de descuento en comida Mexicana. ';
    $descriptionPage="Compra tu membresía familiar y adquiere promociones en Comida Mexicana";
    $urlContent="tacos.php";
    $fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/tacos/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Ftacos%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}
if ($path=="/bar"||$path=="/bar/") {
    $urlCanonical = "https://promocionessmb.com/bar";
    $ogUrl = "https://promocionessmb.com/bar/index.php";
    $ogImage="https://promocionessmb.com/bar/img/familiar-tarjeta-smb.png";
    $titlePage="Promociones Bares | Membresía familiar SMB";
    $titleHeaderPrincipal='Con tu membresia famiiar SMB consigue hasta el <span class="red-text">20%</span>de descuento en Bares y Cantinas. ';
    $descriptionPage="Compra tu membresía familiar y adquiere promociones en Bares y Cantinas";
    $urlContent="bar.php";
    $fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/bar/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Fbar%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}
if ($path=="/desayuno"||$path=="/desayuno/") {
    $urlCanonical = "https://promocionessmb.com/desayuno";
    $ogUrl = "https://promocionessmb.com/desayuno/index.php";
    $ogImage="https://promocionessmb.com/desayuno/img/familiar-tarjeta-smb.png";
    $titlePage="Promociones Desayunos | Membresía familiar SMB";
    $titleHeaderPrincipal='Con tu membresia famiiar SMB consigue hasta el <span class="red-text">20%</span>de descuento en desayunos. ';
    $descriptionPage="Compra tu membresía familiar y adquiere promociones en desayunos";
    $urlContent="desayuno.php";
    $fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/desayuno/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Fdesayuno%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}
if ($path=="/cafeterias"||$path=="/cafeterias/") {
	$urlCanonical = "https://promocionessmb.com/cafeterias";
	$ogUrl = "https://promocionessmb.com/cafeterias/index.php";
	$ogImage="https://promocionessmb.com/cafeterias/img/familiar-tarjeta-smb.png";
	$titlePage="Promociones en cafeterías | Membresía familiar SMB";
	$titleHeaderPrincipal='Compra tu membresía familiar y adquiere promociones en <span class="red-text">cafeterías</span>. ';
	$descriptionPage="Compra tu membresía familiar y adquiere promociones en cafeterías";
	$urlContent="cafeterias.php";
	$fbsharebutton='<div class="fb-share-button" data-href="https://promocionessmb.com/cafeterias" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Fcafeterias&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>';
}

include_once ("fragment/header.php");
include_once ("fragment/content.php");
include_once("fragment/footer.php");


