<?php get_header();?>

    <main class="gallery_main">
      <nav class="gallery__sub-menu">
        <div class="sub-menu__inner">
          <ul class="sub-items">
            <div class="sub-items1">
              <li class="sub-item">
                <a href="<?php the_permalink(); ?>" class="item_link">CAKE</a>
              </li>
              <li class="sub-item sub-item--type2">
                <a href="<?php the_permalink(); ?>" class="item-link">COOKIE</a>
              </li>
              <li class="sub-item sub-item--type3">
                <a href="<?php the_permalink(); ?>" class="item_link">CUPCAKE</a>
              </li>
            </div>
            <div class="sub-items2">
              <li class="sub-item sub-item--type4">
                <a href="<?php the_permalink(); ?>" class="item_link">EVENT</a>
              </li>
              <li class="sub-item sub-item--type5">
                <a href="<?php the_permalink(); ?>" class="item_link">OSHIKATU</a>
              </li>
              <li class="sub-item sub-item--type6">
                <a href="" class="item_link">OTHER</a>
              </li>
            </div>
          </ul>
        </div>
      </nav>

      <div class="gallery-cake">
        <div class="inner">
          <h2 class="heading heading--type js-in-view fade-in-up">
            CAKE GALLERY
          </h2>
          <div class="cake__cards cake-cards">
            <div class="cake-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/img-cake/cake-1.png" alt="" class="cake-card" />
            </div>
            <div class="cake-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/img-cake/cake-2.png" alt="" class="cake-card" />
            </div>
            <div class="cake-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/img-cake/cake-3.png" alt="" class="cake-card" />
            </div>
            <div class="cake-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/img-cake/cake-4.png" alt="" class="cake-card" />
            </div>
            <div class="cake-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/img-cake/cake-5.png" alt="" class="cake-card" />
            </div>
            <div class="cake-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/img-cake/cake-6.png" alt="" class="cake-card" />
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>

