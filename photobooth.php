<?php /* Template Name: Photobooth */ ?>
<!doctype html>
<html>
<head><?php wp_head(); ?>
	<meta charset="utf-8">
	<title>Inschrijven FIFA Tournament <?php wp_title(); ?></title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdn.rawgit.com/noelboss/featherlight/1.3.4/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
  <link href="//cdn.rawgit.com/noelboss/featherlight/1.3.4/release/featherlight.min.css" type="text/css" rel="stylesheet" />
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
</head>
<body><div class="container">
				<?php query_posts('posts_per_page=15'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>      
                <strong><?php the_title(); ?></strong>
                <p class="italic light">Gepubliceerd op <?php the_date(); ?></p>
                <?php the_excerpt(); ?>
                <p>&nbsp;</p>
                <?php endwhile; endif; ?>    </div>
<?php wp_footer(); ?>
</body>
</html>