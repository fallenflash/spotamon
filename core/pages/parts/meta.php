<?php
require_once 'initiate.php';

$Meta = new \Spotamon\Meta(W_DOMAIN);

?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
<title><?=$Meta->title?></title>
<meta name="description" content="<?=$Meta->description?>">

<?php if (!empty($analytics)) {?>
    <!--globalsite tag (gtag . js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?=$analytics?>"></script>

        <?php }?>


<!-- Link include favicons, app icons, and mobile chrome manifest -->
<link rel="apple-touch-icon" sizes="180x180" href="<?=$Meta->images->apple?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?=$Meta->images->faviconLg?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$Meta->images->faviconSm?>">
<link rel="manifest" href="/core/assets/meta/site.webmanifest">
<link rel="mask-icon" href="<?=$Meta->images->safari?>" color="#5bbad5">
<link rel="shortcut icon" href="<?=$Meta->images->faviconIco?>">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="msapplication-config" content="/core/assets/meta/browserconfig.xml">
<meta name="theme-color" content="#1386c7">
<!-- OpenGraph Meta tags -->
<meta property="og:image:width" content="279">
<meta property="og:image:height" content="279">
<meta property="og:description" content="<?=$Meta->description?>">
<meta property="og:url" content="<?=$Meta->site?>">
<meta property="og:image" content="<?=$Meta->site?><?=$Meta->images->ogImage?>">
<meta property="og:title" content="<?=$Meta->title?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="<?=$Meta->locale?>">
<meta property="og:site_name" content="<?=$Meta->name?>">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?=$Meta->title?>">
<meta name="twitter:site"  content="<?=$Meta->site?>">
<meta name="twitter:description" content="<?=$Meta->description?>">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image" content="<?=W_DOMAIN?><?=$Meta->images->facebookLg?>">

<!-- Robots Meta -->

<meta name="robots" content="index,follow">

<!-- CSS Files -->

        <!--  Bootstrap & FontAwesome-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">


    <!-- Data tables -->
<link rel="stylesheet" type="text/css" href="<?=W_CSS?>dataTables.css">

    <!-- Leaflet (openstreetmap) -->
<link rel="stylesheet" href="<?=versionFile(W_CSS . 'leaflet.css')?>">

    <!-- Animations and Theme for menu and navbar -->
<link rel="stylesheet" type="text/css" media="all" href="<?=versionFile(W_CSS . 'fade-down.css')?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?=W_CSS?>menu.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?=versionFile(W_CSS . 'black-gry.css')?>" />


<!-- custom styles -->
<link rel="stylesheet" type="text/css" href="<?=versionFile(W_CSS . 'style.css')?>">

<?php
//TODO  Break appart css and make get function to only load needed per page
?>