<?php /* Template Name: Inschrijfpagina 2 sessies */ ?>
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
<img src="<?php bloginfo('template_directory'); ?>/imginschrijven/logo.png" class="fifatournament" style="width: 100px;" />
<div id="titel"><img src="<?php bloginfo('template_directory'); ?>/imginschrijven/fifa17.png" /><br class="visible-xs-block" /><img src="<?php bloginfo('template_directory'); ?>/imginschrijven/toernooi17.png" />
<p><?php the_field('doelgroep'); ?></p></div>
<div class="info">
    <p><?php the_field('informatie'); ?></p>
</div>
<div class="inschrijven">
    <a href="<?php the_field('formulier'); ?>"><div class="btn btn-default inschrijfknop" style="margin-bottom: 5px;"><?php the_field('knop1'); ?></div></a>
    <a href="<?php the_field('formulier2'); ?>"><div class="btn btn-default inschrijfknop"><?php the_field('knop2'); ?></div></a>
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