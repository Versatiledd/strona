<?php get_header();
while (have_posts()) : the_post(); ?>

    <div class="blog-page"> 
        <div class="blog-container">
            <h2 class="blog-title"><span class="blog-world">Witaj</span> w naszym sklepie!</h2>
            <p class="blog-description">Codziennie ciekawe promocje w dobrej cenie!</p>
        </div>
        <div class="blog-image">
            <img src="<?php echo get_theme_file_uri('/images/blog-img.svg');?>" class="img"alt="">
        </div>
    </div>

  <?php the_content(); ?>

<?php endwhile; ?>