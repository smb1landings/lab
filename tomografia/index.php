<?php
$path=$_SERVER['REQUEST_URI'];
$titlePage="";
$descriptionPage="";
if($path=="/laboratorio"){
    $titlePage="Promociones en laboratorios y análisis clínicos | Membresía familiar SMB";
    $descriptionPage="Promociones en análisis clínicos y de gabinete hasta con un 40% de descuento.";
    $firstPromotion='<!--LMP-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage1">
                    &nbsp;
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12 center">
                <img src="img/kurian.jpeg" height="120" width="120" alt="KURIAN">
                <h2>Laboratorio Médico Polanco</h2>
                <h2>Promoción</h2>
                <p>
                    <span class="red-text">50%</span> de descuento en estudi.<br>
                    <span class="red-text">20%</span> en calcetines, cinturones sobre el precio de lista.<br>
                    Servicio de sastrería sin costo.
                </p>

                <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promocion-laboratorio-m%C3%A9dico-polanco-178" target="_blank">Detalles</a>

            </div>
        </div>
    </div>
    </article>
</section>
<!--end LMP-->
    ';
    $oldPromotion.='<!--nike-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage3">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/nike.jpeg" height="120" width="120" alt="NIKE STORE OPERADAS POR TYPHOON SPORTS COALITION">
                    <h2>TIENDAS NIKE STORE OPERADAS POR TYPHOON SPORTS COALITION.</h2>
                    <h2>Promoción</h2>
                    <p>
                        Descuento en compras de textil, calzado deportivo y accesorios.<br>
                        <span class="red-text">15%</span> de descuento con pago en efectivo.
                        <span class="red-text">10%</span> de descuento en pago con tarjeta de crédito o débito.<br>
                    </p>

                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/nike-store.pdf" target="_blank">Detalles</a>

                </div>
            </div>
        </div>
    </article>
</section>
<!--end nike-->';
	$oldPromotion.='
	<!--swim-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage5">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/the-swim-store.jpeg" height="120" width="120" alt="THE SWIM STORE">
                    <h2>SWIM STORE TIENDA DE ARTÍCULOS Y TRAJES DE BAÑO ESPECIALIZADOS PARA NATACIÓN. ENVÍOS A TODA LA REPÚBLICA.</h2>
                    <h2>Promoción</h2>
                    <p>
                        <span class="red-text">10%</span> de descuento en todas tus compras.<br>
                    </p>
                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/swim-store.pdf" target="_blank">Detalles</a>
                </div>
            </div>
        </div>
    </article>
</section>
<!--end swim-->
	';
}
if($path=="/ropa-deportiva"){
	$titlePage="Promociones en ropa deportiva | Membresía familiar SMB";
	$descriptionPage="Promociones en ropa deportiva, tenis y accesorios para gimnasio hasta en un 15% de descuento.";
	$firstPromotion='
	<!--nike-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage3">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/nike.jpeg" height="120" width="120" alt="NIKE STORE OPERADAS POR TYPHOON SPORTS COALITION">
                    <h2>TIENDAS NIKE STORE OPERADAS POR TYPHOON SPORTS COALITION.</h2>
                    <h2>Promoción</h2>
                    <p>
                        Descuento en compras de textil, calzado deportivo y accesorios.<br>
                        <span class="red-text">15%</span> de descuento con pago en efectivo.
                        <span class="red-text">10%</span> de descuento en pago con tarjeta de crédito o débito.<br>
                    </p>

                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/nike-store.pdf" target="_blank">Detalles</a>

                </div>
            </div>
        </div>
    </article>
</section>
<!--end nike-->
	';
$oldPromotion.='
<!--kurian-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage1">
                    &nbsp;
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12 center">
                <img src="img/kurian.jpeg" height="120" width="120" alt="KURIAN">
                <h2>KURIAN, ES UNA EMPRESA 100% MEXICANA QUE PRODUCE Y EXPORTA CASIMIRES Y MANUFACTURA TRAJES DE VESTIR PARA CABALLERO.</h2>
                <h2>Promoción</h2>
                <p>
                    <span class="red-text">50%</span> de descuento en trajes para hombre, sacos, camisas y pantalones de vestir.<br>
                    <span class="red-text">20%</span> en calcetines, cinturones sobre el precio de lista.<br>
                    Servicio de sastrería sin costo.
                </p>

                <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promocion-kurian-134" target="_blank">Detalles</a>

            </div>
        </div>
    </div>
    </article>
</section>
<!--end kurian-->
';
	$oldPromotion.='    
    <!--swim-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage5">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/the-swim-store.jpeg" height="120" width="120" alt="THE SWIM STORE">
                    <h2>SWIM STORE TIENDA DE ARTÍCULOS Y TRAJES DE BAÑO ESPECIALIZADOS PARA NATACIÓN. ENVÍOS A TODA LA REPÚBLICA.</h2>
                    <h2>Promoción</h2>
                    <p>
                        <span class="red-text">10%</span> de descuento en todas tus compras.<br>
                    </p>
                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/swim-store.pdf" target="_blank">Detalles</a>
                </div>
            </div>
        </div>
    </article>
</section>
<!--end swim-->
    ';

}
if($path=="/trajes-bano"){
	$titlePage="Promociones en trajes de baño | Membresía familiar SMB";
	$descriptionPage="Promociones en trajes de baño, hasta en un 10% de descuento.";
    $firstPromotion='    
    <!--swim-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage5">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/the-swim-store.jpeg" height="120" width="120" alt="THE SWIM STORE">
                    <h2>SWIM STORE TIENDA DE ARTÍCULOS Y TRAJES DE BAÑO ESPECIALIZADOS PARA NATACIÓN. ENVÍOS A TODA LA REPÚBLICA.</h2>
                    <h2>Promoción</h2>
                    <p>
                        <span class="red-text">10%</span> de descuento en todas tus compras.<br>
                    </p>
                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/swim-store.pdf" target="_blank">Detalles</a>
                </div>
            </div>
        </div>
    </article>
</section>
<!--end swim-->
    ';
	$oldPromotion.='
<!--kurian-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage1">
                    &nbsp;
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12 center">
                <img src="img/kurian.jpeg" height="120" width="120" alt="KURIAN">
                <h2>KURIAN, ES UNA EMPRESA 100% MEXICANA QUE PRODUCE Y EXPORTA CASIMIRES Y MANUFACTURA TRAJES DE VESTIR PARA CABALLERO.</h2>
                <h2>Promoción</h2>
                <p>
                    <span class="red-text">50%</span> de descuento en trajes para hombre, sacos, camisas y pantalones de vestir.<br>
                    <span class="red-text">20%</span> en calcetines, cinturones sobre el precio de lista.<br>
                    Servicio de sastrería sin costo.
                </p>

                <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promocion-kurian-134" target="_blank">Detalles</a>

            </div>
        </div>
    </div>
    </article>
</section>
<!--end kurian-->
';
	$oldPromotion.='    
    <!--nike-->
<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage3">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/nike.jpeg" height="120" width="120" alt="NIKE STORE OPERADAS POR TYPHOON SPORTS COALITION">
                    <h2>TIENDAS NIKE STORE OPERADAS POR TYPHOON SPORTS COALITION.</h2>
                    <h2>Promoción</h2>
                    <p>
                        Descuento en compras de textil, calzado deportivo y accesorios.<br>
                        <span class="red-text">15%</span> de descuento con pago en efectivo.
                        <span class="red-text">10%</span> de descuento en pago con tarjeta de crédito o débito.<br>
                    </p>

                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/nike-store.pdf" target="_blank">Detalles</a>

                </div>
            </div>
        </div>
    </article>
</section>
<!--end nike-->
    ';
}
?>
<!DOCTYPE html xmlns="http://www.w3.org/1999/xhtml"
        xmlns:og="http://ogp.me/ns#"
        xmlns:fb="http://www.facebook.com/2008/fbml">
<html lang="es-MX">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68619307-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-68619307-2');
    </script>
    <meta charset="UTF-8">
    <meta property="og:url" content="https://promocionessmb.com/ropa-tenis/index.html"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo($titlePage); ?>"/>
    <meta property="og:image" content="https://promocionessmb.com/ropa-tenis/img/familiar-tarjeta-smb.jpg"/>
    <meta property="og:description" content="<?php echo($descriptionPage); ?>"/>
    <meta property="og:site_name" content="Tarjeta SMB"/>
    <meta property="fb:app_id" content="2128802427384916"/>
    <meta name="description" content="<?php echo($descriptionPage); ?>"/>
    <meta name="keywords" content="promociones, promociones en ropa, promociones en tenis, promociones en zapatos, descuentos en ropa, descuentos en tenis, descuentos en zapatos, cupones, descuentos"/>
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://promocionessmb.com/ropa-tenis"/>
    <title><?php echo($titlePage); ?></title>
    <link href="https://promocionessmb.com/ropa-tenis/smb2.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="preload" href="css/reset-css.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="css/materialicon.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="css/materialize.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="../css/main-ropa-tenis.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="css/reset-css.css">
        <link rel="stylesheet" href="css/materialicon.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="../css/main-ropa-tenis.css">
    </noscript>
</head>
<body>
<?php //echo $titlePage; ?>
<!-- code facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end code facebook-->
<!--Start cover-->
<div class="cover">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--end cover-->

<!--button action-->
<div id="acctionbuttoncontent">
    <div class="center-align">
        <p class="textAnuncio">
            Adquiere estos descuentos comprando una membresía familiar
        </p>
    </div>

    <div class="center-align">
        <a class="btn-small pink accent-3 contentButton waves-effect waves-light" href="https://www.servicioshuman.mx/tarjetasmb/red-comercial.html?secc1=red-comercial_moda" target="_blank">Más promociones</a>
                <a class="btn-small pink accent-3 contentButton waves-effect waves-light" href="https://www.servicioshuman.mx/cupones-de-descuento-smb/tienda/" target="_blank"><i class="material-icons left">shopping_cart</i>Compra tu membresía</a>
    </div>

</div>
<!--end button action-->

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><img src="img/logo-smb.svg" alt="Logo Tarjeta SMB" width="100px"></a>
    </div>
</nav>

<section class="titlecover">
    <div class="container-wide titlepage1 center">
        <div class="row clearmarginbottom">
            <div class="col s12 m12 l12 xl12">
                <h1>Promociones en laboratorios médicos, estudios clínicos y radiología hasta en un <span class="red-text">50% de descuento</span>. <a class="btn-small pink accent-3 contentButton waves-effect waves-light center" href="https://www.servicioshuman.mx/tarjetasmb/red-comercial.html?secc1=red-comercial_moda" target="_blank">Más promociones</a></h1>
            </div>
        </div>
    </div>
</section>

<?php echo $firstPromotion; ?>
<?php echo $oldPromotion; ?>

<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage4">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/innovasport.jpeg" height="120" width="120" alt="INNOVASPORT">
                    <h2>EN LABORATORIOS MÉDICOS POLANCO, OFRECEMOS INFORMACIÓN CONFIABLE Y OPORTUNA PARA EL DIAGNÓSTICO MÉDICO</h2>
                    <h2>Promoción</h2>
                    <p>
                        <span class="red-text">40%</span> de descuento en análisis clínicos y de gabinete.<br>
                    </p>
                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promociones/laboratorio-medico-polanco.pdf" target="_blank">Detalles</a>
                </div>
            </div>
        </div>
    </article>
</section>

<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage6">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/dc-shoe-co-usa.jpeg" height="120" width="120" alt="DC SHOE CO USA">
                    <h2>DC SHOE CO USA, LÍDER EN ZAPATOS DE SKATE DE RENDIMIENTO Y UNA RECONOCIDA MARCA DE LOS DEPORTES DE ACCIÓN. CUYA LÍNEA DE PRODUCTOS SE HA AMPLIADO PARA HOMBRES, MUJERES Y NIÑOS.</h2>
                    <h2>Promoción</h2>
                    <p>
                        <span class="red-text">15%</span> de descuento en tiendas físicas.<br>
                        <span class="red-text">5%</span> de descuento adicional en outlets.<br>
                    </p>
                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promocion-dc-shoe-co-usa-140" target="_blank">Detalles</a>
                </div>
            </div>
        </div>
    </article>
</section>

<section>
    <article>
        <div class="container-wide">
            <div class="row">
                <div class="col s12 m12 l12 xl12 backimage7">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 xl12 center">
                    <img src="img/lizminelli.jpeg" height="120" width="120" alt="LIZMINELLI">
                    <h2>LIZMINELLI, VESTIDOS DE NOCHE.</h2>
                    <h2>Promoción</h2>
                    <p>
                        <span class="red-text">5%</span> de descuento.<br>
                    </p>
                    <a class="waves-effect waves-light waves-red blue-grey lighten-5 red-text btn-flat" href="https://www.servicioshuman.mx/promocion-lizminelli-136" target="_blank">Detalles</a>
                </div>
            </div>
        </div>
    </article>
</section>

<footer class="grey darken-4">
    <div class="container section spacePadding">
        <div class="row">
            <div class="col s12 m6 l4 xl4">
                    <a class="textfooter" href="https://www.servicioshuman.mx/cupones-de-descuento-smb/terminos-y-condiciones/" title="Términos y condiciones Tarjeta SMB" target="_blank">
                        TÉRMINOS Y CONDICIONES
                    </a>
            </div>
            <div class="col s12 m6 l4 xl4">
                <div class="paddingButtonTopFixed">
                    <div class="fb-share-button" data-href="https://promocionessmb.com/ropa-tenis" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpromocionessmb.com%2Fropa-tenis&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                </div>
            </div>
            <div class="col s12 m12 l4 xl4 right-align">
                <div class="left logopaddingr">
                    <a href="https://www.facebook.com/TarjetaSmb/" target="_blank"><img src="img/facebook-icon.jpg" alt="Facebook Tarjeta SMB" title="Facebook Tarjeta SMB"></a>
                </div>
                <div class="left logopaddingr">
                    <a href="https://api.whatsapp.com/send?phone=5215530361191" target="_blank"><img src="img/whatsapp-icon.jpg" alt="Whatsapp Tarjeta SMB" title="Whatsapp Tarjeta SMB"></a>
                </div>
                <a href="#" class="brand-logo"><img src="img/logo-smb.svg" alt="Logo Tarjeta SMB" width="100px" title="Tarjeta SMB"></a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l4 xl4">

            </div>
            <div class="col s12 m6 l4 xl4">

            </div>
            <div class="col s12 m12 l4 xl4">
                &nbsp;
            </div>
        </div>
    </div>
    <div class="container section textfooterDirection">
        <div class="row no-margin-bottom">
            <div class="col s12 m12 l12 xl12 contentDirection">
                     <div class="textCard footercolor" itemscope="" itemtype="http://schema.org/Organization">
                        &nbsp;©&nbsp; 2018 <span itemprop="name">Tarjeta SMB</span> <span class="blue-text">|</span>
                         <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                             <span itemprop="streetAddress">Maricopa No.28</span>&nbsp;C.P. <span itemprop="postalCode">03810</span>&nbsp;<span itemprop="addressLocality">Col. Nápoles, Benito Juárez, Ciudad de México</span></span> <span class="blue-text">|</span>
                         Tel.<span itemprop="telephone">9000 4242 / 01 (55) 11077787 / Consultel. 55 30 36 11 91 </span> <span class="blue-text">|</span> E-mail: <span itemprop="email">tarjetasmb@servicioshuman.com.mx</span>
                    </div>
            </div>
        </div>
    </div>
</footer>
<script rel="stylesheet" type="text/javascript" src="js/cssrelpreload.js"></script>
<script rel="stylesheet" type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="../js/main-ropa-tenis.js"></script>
<script rel="stylesheet" type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>