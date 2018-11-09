  <section class="home-slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 pr-0 p0-mobi">
          <aside class="d-flex pt-3">
            <nav class="navbar navbar-expand-md flex-column align-items-start">
              <img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/EatDrinkPlay.png" alt="">
              <button class="navbar-toggler pl-0" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="primary-nav"
                aria-expanded="false" aria-label="Toggle navigation">
             <img class="toggler" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" />
           </button>
              <img class="logo-mobi" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mobi.jpg" alt="">

              <div class="collapse navbar-collapse flex-column align-items-start" id="primary-nav">

            <?php
              if (has_nav_menu('main_menu')) :
                wp_nav_menu(['theme_location' => 'main_menu', 'menu_class' => 'navbar-nav flex-column']);
              endif;
              ?>
        </div>
            </nav>

          </aside>
        </div>
        <div class="col-md-8 col-lg-9  col-sm-12 p-0">
          <div class="pt-2 pr-2 slider-wrapper">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" />
                  <div class="caption">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">secret Foodies</span>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus numquam.</h4>
                    <small>kaddy oconner | 5 mints ago</small>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" />
                  <div class="caption">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">Eat</span>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus numquam.</h4>
                    <small>kaddy oconner | 5 mints ago</small>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" />
                  <div class="caption">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/drink.svg" />
                    <span class="badge">Drink</span>
                    <h4>Lorem consectetur adipisicing elit. Temporibus numquam.</h4>
                    <small>kaddy oconner | 5 mints ago</small>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4.jpg" />
                  <div class="caption">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
                    <span class="badge">Play</span>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus numquam.</h4>
                    <small>kaddy oconner | 5 mints ago</small>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide5.jpg" />
                  <div class="caption">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">SECRET FOODIES</span>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus numquam.</h4>
                    <small>kaddy oconner | 5 mints ago</small>
                  </div>
                </li>

                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>
            <div id="carousel" class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">SECRET FOODIES</span>
                  </div>

                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">Eat</span>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">Drink</span>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
                    <span class="badge">play</span>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide5.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">SECRET FOODIES</span>
                  </div>
                </li>

                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="trending mt-5">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class=" sub-heading pt-5 mb-4">Trending</h3>
        </div>
        <div class="col-md-5 align-items-end d-flex">
          <div class="post-title">
            <span class="badge danger">Play</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-7">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
            <div class="post food">


            </div>
          </div>
        </div>

      </div>

      <div class="row mt-4">
        <div class="col-md-5">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post travel">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-7">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post drink">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
          <button class="btn btn-outline-secondary">View all</button>
        </div>
      </div>
    </div>
  </section>

  <section class="guid mt-5">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12 mb-4">
          <h3 class=" sub-heading line pt-5">Essential Guides</h3>
        </div>

        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post travel">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post drink">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
            <div class="post travel">


            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">play</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="outer-div">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post food">
              
            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post drink">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
            <div class="post travel">


            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">play</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
          <button class="btn btn-outline-secondary">View all</button>
        </div>
      </div>
    </div>
  </section>

  <section class="latest-news mt-5">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12">
          <h3 class=" sub-heading line pt-5 mb-4">latest news</h3>
        </div>

        <div class="col-md-5">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post travel">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-7">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post drink">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>

      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post food">
              
            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post drink">
              

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
            <div class="post travel">


            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">play</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
          <button class="btn btn-outline-secondary">View all</button>
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ad mt-5 mb-5">

          </div>
        </div>

        <div class="col-md-5">
          <h2 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
          <form action="">
            <div class="form-group">
              <select class="form-control" name="" id="">
                 <option value="Sydney">Sydney</option>
               </select>
              <select class="form-control" name="" id="">
                 <option value="Sydney">Bondi Beach</option>
               </select>
              <select class="form-control" name="" id="">
                 <option value="Sydney">Restuarants</option>
               </select>
            </div>
          </form>

          <div class="listing mt-5">
            <span class="badge light">play</span>
            <h2>Name Place</h2>
            <small>00 Darlignton Street,Bondi Beach, NSw <br>Discription 0040</small>
          </div>
        </div>
        <div class="col-md-7">
          <div class="g-map">

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="guid mt-5">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12">
          <h3 class=" sub-heading line pt-5">Secret Foodies</h3>
        </div>

      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="post plan mb-4">
            <button class="btn btn-outline-white">View all</button>

          </div>
        </div>
        <div class="col-md-4">
           <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
             
          <div class="post food">
      </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
             <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
            <div class="post drink">
             

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">Travel</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="outer-div mb-4">
             <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
            <div class="post travel">
             

            </div>
          </div>
          <div class="post-title">
            <span class="badge danger">play</span>
            <h2>"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</h2>
            <small>kaddy oconner | 5 mints ago</small>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="insta">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12">
          <h3 class=" sub-heading line pt-5">Instagram</h3>
        </div>

      </div>
      <div class="row mb-5 mt-4">
        <div class="col pr-0">
          <div class="insta-wrapper play">

          </div>

        </div>
        <div class="col p-0">
          <div class="insta-wrapper food">

          </div>

        </div>
        <div class="col p-0">
          <div class="insta-wrapper drink">

          </div>

        </div>
        <div class="col p-0">
          <div class="insta-wrapper travel">

          </div>

        </div>
        <div class="col p-0">
          <div class="insta-wrapper food">

          </div>

        </div>
        <div class="col pl-0">
          <div class="insta-wrapper play">

          </div>

        </div>
      </div>
    </div>

  </section>


  <section class="newsletter p-5">

    <div class="container">

      <h1>Newsletter</h1>
      <p>Discover and Enjoy New Places</p>

      <div class="form-group">
        <input type="text" class="form-control" placeholder="INSERT YOUR EMAIL">
        <button class="btn btn-danger">subscribe</button>

      </div>
    </div>

  </section>