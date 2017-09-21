<?php /* Template Name: Inschrijfpagina */ ?>
<!doctype html>
<html>
<head><?php wp_head(); ?>
	<meta charset="utf-8">
	<title>Inschrijven FIFA Tournament <?php wp_title(); ?></title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdn.rawgit.com/noelboss/featherlight/1.3.4/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
  <link href="//cdn.rawgit.com/noelboss/featherlight/1.3.4/release/featherlight.min.css" type="text/css" rel="stylesheet" />
  <link href="<?php bloginfo('template_directory'); ?>/cssinschrijven/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_directory'); ?>/cssinschrijven/style.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
</head>
<body id="zeventien">
<div id="banner"><?php the_title(); ?> PRESENTEERT</div>
<img src="<?php bloginfo('template_directory'); ?>/imginschrijven/logo.png" class="fifatournament" />
<div id="titel"><img src="<?php bloginfo('template_directory'); ?>/imginschrijven/fifa.png" /><br class="visible-xs-block" /><img src="<?php bloginfo('template_directory'); ?>/imginschrijven/toernooi.png" />
<p><?php the_field('doelgroep'); ?></p></div>
<div class="info">
    <p>Datum: <span class="groen"> <?php the_field('datum'); ?></span></p>
    <p>Tijd: <span class="groen"> <?php the_field('tijd'); ?></span></p>
<?php if( get_field('deelname') ): ?>
    <p>DEELNAME: <span class="groen"> <?php the_field('deelname'); ?></span></p>
<?php endif; ?>
</div>
<div class="inschrijven">
    <a href="#"  data-featherlight="#inschrijven"><div class="btn btn-default inschrijfknop">Schrijf je nu in!</div></a>
    <?php if( get_field('bijsluiter') ): ?>
    <p><?php the_field('bijsluiter'); ?></p>
<?php endif; ?>
</div>
<div class="reus"></div>
<div class="zelforganiseren">Zelf een FIFA toernooi organiseren? Kijk op <a href="www.fifatournament.com/" target="_blank">fifatournament.com</a>!</div>


    <div id="inschrijven" class="vederlicht" style="display:none;">
<iframe src="<?php the_field('formulier'); ?>" class="frame" frameborder="0" marginheight="0" marginwidth="0" scrolling="yes">Bezig met laden...</iframe>
    </div>

<?php wp_footer(); ?>
</body>
</html>