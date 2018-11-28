 <footer class="p-4 mt-5">
    <div class="container">
     <!-- <ul class="navbar-nav flex-row flex-row-mobi">
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">subscribe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Advertising</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Editorial Policy</a>
        </li>
      </ul> -->
      <?php
      if (has_nav_menu('secondary_menu')) :
      wp_nav_menu(['theme_location' => 'secondary_menu', 'menu_class' => 'navbar-nav flex-row flex-row-mobi']);
      endif; ?>
      <hr>

      <div class="social-footer">
        <small>Copyright <?php echo date('Y'); ?> Eat Drink Play</small>
        <ul class="navbar-nav social flex-row">
          <li class="nav-item">
            <a class="nav-link active" href="https://www.facebook.com/eatdrinkplay"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.svg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/msdarlinghurst"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/eatdrinkplaysyd/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/you.svg" alt=""></a>
          </li>


        </ul>
      </div>
    </div>
  </footer>