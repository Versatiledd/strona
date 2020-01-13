<?php get_header(); ?>
    <div class="blog-page"> 
        <div class="blog-container">
            <h2 class="blog-title"><span class="blog-world">Witaj</span> na naszym firmowym blogu</h2>
            <p class="blog-description">Śledź na bieżąco najnowsze informacje</p>
        </div>
        <div class="blog-image">
            <img src="<?php echo get_theme_file_uri('/images/blog-img.svg');?>" class="img"alt="">
        </div>
    </div>
    <div class="upcoming-post">
        <?php while(have_posts()){
            the_post(); ?> 
                <div class="post-item">
                    <h4 class="post-title"><?php the_title();?></h4>
                </div>
                <div class="content-item">
                    <p class="content-info"><?php the_excerpt(); ?></p>
                </div>
                <a href="<?php the_permalink();?>" class="post-link"> Czytaj dalej </a> 
            <?php
        }
            echo paginate_links();
        ?>
    </div>
<?php
get_footer();
?>