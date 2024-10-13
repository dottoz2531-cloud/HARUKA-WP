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
          <h2 class="heading concept__heading js-in-view fade-in-up">CONCEPT</h2>
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
              <?php 
               $category = get_the_category();?>
              <div class="gallery-card__text <?php echo $category[0]->slug; ?>">
                <p class="card-text">
               <?php echo $category[0]->cat_name; ?></p>
              </div>
            </a>
            <?php endwhile;?>
           <?php endif;?>
          </div>
        </div>
      </section>

      <section class="genre">
        <div class="genre__inner">
          <h2 class="heading heading--type2 js-in-view fade-in-up">GENRES</h2>
          <div class="genre__cards">
            <a href="" class="genre__card genre-card">
              <div class="genre-card__img">
                <img
                  src="<?php echo get_template_directory_uri()?>/img/img-gallery/cake.png"
                  alt=""
                />
              </div>
              <div class="genre-card__text">
                <p class="genre-text">WEDDING</p>
              </div>
            </a>
            <a href="" class="genre__card genre-card">
              <div class="genre-card__img">
                <img
                  src="<?php echo get_template_directory_uri()?>/img/img-gallery/cake.png"
                  alt=""
                />
              </div>
              <div class="genre-card__text">
                <p class="genre-text">WEDDING</p>
              </div>
            </a>
            <a href="" class="genre__card genre-card">
              <div class="genre-card__img">
                <img
                  src="<?php echo get_template_directory_uri()?>/img/img-gallery/cake.png"
                  alt=""
                />
              </div>
              <div class="genre-card__text">
                <p class="genre-text">WEDDING</p>
              </div>
            </a>
            <a href="" class="genre__card genre-card">
              <div class="genre-card__img">
                <img
                  src="<?php echo get_template_directory_uri()?>/img/img-gallery/cake.png"
                  alt=""
                />
              </div>
              <div class="genre-card__text">
                <p class="genre-text">WEDDING</p>
              </div>
            </a>
            <a href="" class="genre__card genre-card">
              <div class="genre-card__img">
                <img
                  src="<?php echo get_template_directory_uri()?>/img/img-gallery/cake.png"
                  alt=""
                />
              </div>
              <div class="genre-card__text">
                <p class="genre-text">WEDDING</p>
              </div>
            </a>
            <a href="" class="genre__card genre-card">
              <div class="genre-card__img">
                <img
                  src="<?php echo get_template_directory_uri()?>/img/img-gallery/cake.png"
                  alt=""
                />
              </div>
              <div class="genre-card__text">
                <p class="genre-text">WEDDING</p>
              </div>
            </a>
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


    <section id="#other" class="other">
          <div class="other__inner">
            <h2 class="heading other__head heading--type2">OTHER</h2>
            <div class="other__slider">
              <!-- Slider main container -->
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img1.png" alt="" />
                      </a>
                      <div class="other-card__text">Profile site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img2.png" alt="" />
                      </a>
                      <div class="other-card__text">Shop site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img3.png" alt="" />
                      </a>
                      <div class="other-card__text">OHA!(架空)</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img4.png" alt="" />
                      </a>
                      <div class="other-card__text">sobolon(架空)</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img1.png" alt="" />
                      </a>
                      <div class="other-card__text">Profile site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img2.png" alt="" />
                      </a>
                      <div class="other-card__text">Shop site</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img3.png" alt="" />
                      </a>
                      <div class="other-card__text">OHA!(架空)</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="other-card">
                      <a href="" class="other-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/works/works-img4.png" alt="" />
                      </a>
                      <div class="other-card__text">sobolon(架空)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>