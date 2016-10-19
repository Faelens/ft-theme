<?php get_header(); ?>
	  <section id="waarom">	    
	      <div class="page_container container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
        <?php endwhile; endif; ?>
        <p></p>
                <p><a href="http://www.fifatournament.com">&lt;&lt; Dit is een gearchiveerde pagina, klik hier om terug te gaan naar de homepage</a></p>
      
    </section>
  
    <style>#fp-nav ul li a.active {display:none !important;}</style>
<?php get_footer(); ?>