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
        <a class="btn-small pink accent-3 contentButton waves-effect waves-light" href="<?php echo($urlPromotions); ?>" target="_blank">Más promociones</a>
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
                <h1><?php echo($titleHeaderPrincipal); ?><a class="btn-small pink accent-3 contentButton waves-effect waves-light center" href="<?php echo($urlPromotions); ?>" target="_blank">Más promociones</a></h1>
</div>
</div>
</div>
</section>

<?php
include_once($urlContent);
?>