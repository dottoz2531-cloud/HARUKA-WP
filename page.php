<?php get_header();?>


<main class="gallery_main">
      
  <?php get_template_part('template-parts/sub-menu')?>

      <div class="gallery-cake">
        <div class="inner">
          <h2 class="heading heading--type js-in-view fade-in-up">
            CAKE GALLERY
          </h2>
          <div class="cake__cards cake-cards">
            <?php if (have_posts()) : // 記事があれば表示 ?>
              <?php while(have_posts()) : // 記事数分ループ ?>
              <?php the_post(); ?>
              <div class="cake-card">
                <?php $gallery = get_post_gallery(); ?>
              </div>
              
              <?php endwhile; ?>
            <?php endif; ?>
             </div>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>