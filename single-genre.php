<?php get_template_part('template-parts/header2'); ?>

    
    <main class="genre__main">
      <nav class="genre__menu">
        <div class="inner genre-menu__inner">
          <div class="genre-sub__box">
            <ul class="genre-sub__items">
              <?php
                 $term_var = get_the_terms($post->ID, 'genre');
                 $related_query = new WP_Query(
                 array(
                  'post_type' => 'genre',
                  'posts_per_page' => '12',
                    )
                  );
                ?>
                <?php if ( $related_query->have_posts() ) : ?>
                  <?php while ( $related_query->have_posts() ) : $related_query->the_post();?>
                  <?php $category = get_the_category();?>
                  <li class="genre-sub__item <?php echo $category[0]->slug; ?>">
                      <a href="<?php the_permalink(); ?>" class="item_link"><?php echo $category[0]->cat_name; ?></a>
                  </li>
                  <?php endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </nav>

      <div class="genre__gallery">
        <div class="inner">
            <div class="heading js-in-view fade-in-up">
                <?php
                    $term_var = get_the_terms($post->ID, 'genre');
                    $related_query = new WP_Query(
                     array(
                     'post_type' => 'genre',
                     'posts_per_page' => '1',
                       )
                     );
                ?>
                <?php if ( $related_query->have_posts() ) : ?>
                    <?php while ( $related_query->have_posts() ) : $related_query->the_post();?>
                      <?php the_post(); ?>
                        <h2 class="heading-main"><?php the_title(); ?></h2>
                    <?php endwhile;?>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="genre-gallery__cards">
                <?php the_content();?>
            </div>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>
