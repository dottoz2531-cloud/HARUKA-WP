<?php get_header();?>

    <main class="gallery_main">
      <nav class="gallery__sub-menu">
        <div class="sub-menu__inner">
          <ul class="sub-items">
            <div class="sub-items1">
              <li class="sub-item">
              <?php if(have_posts()): ?>
                      <?php while(have_posts()) :?>
                        <?php the_post(); ?>
                        <?php 
               $category = get_the_category();?>
                <a href="<?php the_permalink(31); ?>" class="item_link">CAKE</a>
              </li>
              <li class="sub-item sub-item--type2">
                <a href="<?php the_permalink(32); ?>" class="item-link">COOKIE</a>
              </li>
              <li class="sub-item sub-item--type3">
                <a href="<?php the_permalink(33); ?>" class="item_link">CUPCAKE</a>
              </li>
            </div>
            <div class="sub-items2">
              <li class="sub-item sub-item--type4">
                <a href="<?php the_permalink(36); ?>" class="item_link">SEMI-ORDER</a>
              </li>
              <?php endwhile;?>
           <?php endif;?>
            </div>
          </ul>
        </div>
      </nav>

      <div class="gallery-cake">
        <div class="inner">
        <div class="heading js-in-view fade-in-up">
        <?php if (have_posts()) :  ?>
                    <?php while(have_posts()) :  ?>
                        <?php the_post(); ?>
          <h2 class=" heading-main">
          <?php the_title(); ?>
          <p class="heading-sub"></p>
          </h2>
          <?php endwhile; ?>
          <?php endif; ?>
          <div class="gallery-page__cards">
          <?php the_content();?>
          </div>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>

