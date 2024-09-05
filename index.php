<?php get_header();?>

    <main class="main">
      <div class="fv">
        <div class="fv__inner inner">
          <picture class="fv__image">
            <img src="<?php echo get_template_directory_uri()?>/img/shopmark.png" alt="" />
          </picture>
        </div>
      </div>

      <section id="cocept" class="concept">
        <div class="cocept__inner inner">
          <h2 class="heading section__head js-in-view fade-in-up">CONCEPT</h2>

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
          <h2 class="heading heading--type2 js-in-view fade-in-up">GALLERY</h2>
          <div class="gallery__cards">
          <?php if(have_posts()): ?>
                      <?php while(have_posts()) :?>
                        <?php the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="gallery__card gallery-card">
              <div class="gallery-card__img">
              <?php the_post_thumbnail(); ?>
              </div>
              <div class="gallery-card__text">
                <p class="card-text"><?php 
               $category = get_the_category();?>
               <?php echo $category[0]->cat_name; ?></p>
              </div>
            </a>
            <?php endwhile;?>
           <?php endif;?>
            
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