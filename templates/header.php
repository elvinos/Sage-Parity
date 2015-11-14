<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="small-logo-container">
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
            <div class="small-logo"></div></a>
          </div>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

        <?php
          $args = array(
            'menu'  => 'header-menu',
            'menu_class' => 'nav navbar-nav navbar-right',
            'container' => 'false',
            'walker' => new wp_bootstrap_navwalker
            );
          wp_nav_menu($args);
        ?>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="overlay">
    </div>
