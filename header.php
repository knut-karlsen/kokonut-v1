<!DOCTYPE html>
<?php 
  global $page, $title, $description, $age;
  $home = 'http://kokonut.no/';
?>
<html dir="ltr" lang="nb-NO">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $title; ?></title>
  
  <link rel="stylesheet" href="<?php echo $home; ?>css/master.css" media="screen" />
  <link rel="icon" type="image/png" href="<?php echo $home; ?>favicon.png" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js?ver=3.3.1"></script>
  <script src="<?php echo $home; ?>js/modernizr.js"></script>
  <script src="<?php echo $home; ?>js/lightbox.js"></script>
  <script src="<?php echo $home; ?>js/koko.js"></script>
  
  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="html,html5,css,css3,js,jquery,php,cms,web,design,programmering,kode" />
  <meta name="author" content="Knut Karlsen, knut@kokonut.no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!--[if lt IE 7]>  <body class="ie ie6"> <![endif]--> 
<!--[if IE 7]>     <body class="ie ie7"> <![endif]--> 
<!--[if IE 8]>     <body class="ie ie8"> <![endif]--> 
<!--[if IE 9]>     <body class="ie ie9"> <![endif]--> 
<!--[if gt IE 9]>  <body>                <![endif]-->
<!--[if !IE]><!--> <body>            <!--<![endif]-->

  <div class="container<?php if($page == 'index') echo ' index'; ?>">

    <header>
      <hgroup>
        <h1><a href="/">Knut Karlsen</a></h1>
        <h2>Pikselpirker. Kodeknuser.</h2>
      </hgroup>
      <div class="about">
        <div class="contact">
          <a class="avatar"><img src="<?php echo $home; ?>images/knut.png" alt="Knut Karlsen" /></a>
          <ul class="options">
            <li><a class="icon-telephone" href="tel:+4795220381">+47 952 20 381</a></li>
            <li><a class="icon-email" href="mailto:knut@kokonut.no">knut@kokonut.no</a></li>
          </ul>
        </div>
        <p>Hei, jeg heter Knut, er <?php echo $age; ?> år, og jobber til daglig med design og kode. På fritiden gjør jeg det samme. Trenger du en nettside er jeg mannen å prate med.</p>
        <p>Noen av arbeidene mine finner du nedenfor.</p>
      </div>
    </header>