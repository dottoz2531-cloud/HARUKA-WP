<?php get_header();?>

    <main class="main">
      <div class="fv">
        <div class="fv__inner inner">
          <picture class="fv__image js-in-view fade-in-up">
            <img src="<?php echo get_template_directory_uri()?>/img/shoplogo.png" alt="" />
          </picture>
        </div>
      </div>

      <section id="concept" class="concept">
        <div class="concept__inner inner">
        <div class="heading js-in-view fade-in-up">
              <h2 class="heading-main">CONCEPT</h2>
              <p class="heading-sub">コンセプト</p>
            </div>
          <div class="concept__slider">
            <!-- Slider main container -->
            <div id="js-concept-swiper" class="swiper concept__swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/1.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/3.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/4.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/2.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/5.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/6.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide gallery__slide">
                  <div class="content__swiper-slide">
                    <img src="<?php echo get_template_directory_uri()?>/img/img-concept/7.png" alt="" />
                  </div>
                </div>
              </div>
              <!-- If we need pagination -->
              <div
                id="js-concept-pagination"
                class="swiper-pagination concept__pagination"
              ></div>
            </div>
          </div>
          <div class="concept__texts">
            <div class="concept__text">
              オーダーケーキ、カップケーキ<br
                class="hidden-md"
              />アイシングクッキーや琥珀糖など、 <br /><span>”かわいい”</span
              >をテーマに製作しています。
            </div>
            <div class="concept__text">
              かわいい世界観はもちろん<br />モチーフやテーマに沿った、<br
                class="hidden-md"
              />おまかせデザインも得意としています。
            </div>
          </div>
        </div>
      </section>

      <section id="gallery" class="gallery">
        <div class="gallery__inner inner">
          <div class="gallery__box">
            <div class="heading js-in-view fade-in-up">
              <h2 class="heading-main">GALLERY</h2>
              <p class="heading-sub">ギャラリー</p>
            </div>
            <div class="item">
              <div class="item__title js-in-view fade-in-up">
                  <h3 class="title-main">ITEM</h3>
                  <p class="title-sub">アイテム</p>
              </div>
               <div class="item__cards">
                 <?php if(have_posts()): ?>
                   <?php while(have_posts()) :?>
                      <?php the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="item__card item-card">
                           <div class="item-card__img">
                             <?php the_post_thumbnail(); ?>
                           </div>
                           <?php
                            $category = get_the_category();?>
                           <div class="item-card__text <?php echo $category[0]->slug; ?>">
                             <p class="card-text">
                             <?php echo $category[0]->cat_name; ?></p>
                           </div>
                        </a>
                    <?php endwhile;?>
                 <?php endif;?>
                </div>
            </div>
          </div>
          <div class="genre">
              <div class="item__title js-in-view fade-in-up">
                <h3 class="title-main">GENRE</h3>
                <p class="title-sub">ジャンル</p>
              </div>
              
              <div class="genre__cards">
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
                <a href="<?php the_permalink(); ?>" class="genre__card genre-card">
                  <div class="genre-card__img">
                  <?php the_post_thumbnail(); ?>
                  </div>
                  <?php $category = get_the_category();?>
                  <div class="genre-card__text <?php echo $category[0]->slug; ?>">
                    <p class="genre-text"><?php echo $category[0]->cat_name; ?></p>
                  </div>
                </a>
                <?php endwhile;?>
               <?php endif;?>
               <?php wp_reset_postdata(); ?>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="contact">
        <div class="contact__inner inner">
          <h2 class="heading heading-contact js-in-view fade-in-up">
            CONTACT & ORDER
          </h2>
          <div class="contact__line">
            <img src="<?php echo get_template_directory_uri()?>/img/line url.png" alt="" />
          </div>
          <div class="contact__texts">
            <p class="contact__text contact__text--type2">
              お問い合わせ、ご注文、お見積もりは、<br />LINEにて受け付けております。
            </p>
            <p class="contact__text">
              恐れ入りますが、<span>友達登録</span>をしていただき、<br />チャットにて対応させていただきます。
            </p>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>


