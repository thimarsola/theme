<header class="header">
    <div class="container-lg">

        <!-- content -->
         <div class="header__content shadow bg-white-500 radius-lg">

             <!-- brand -->
              <div class="header__content__brand">
                  <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
                      <img src="<?= image('logo-topo.svg', 'svg'); ?>" alt="Logo Pepetos">
                  </a>
              </div>
             <!-- end of brand -->

             <!-- navbar -->
              <div class="header__content__navbar px-4">
                  <nav class="header__content__navbar__menu">
                      <!-- header -->
                       <header class="header__content__navbar__menu__header d-none">
                           <h2>Menu de navegação</h2>
                       </header>
                      <!-- end of header -->
	                  <?php wp_nav_menu(array('theme_location' => 'header-home')); ?>
                  </nav>
              </div>
             <!-- end of navbar -->

             <!-- cta -->
              <div class="header__content__cta bg-dark-blue-500 clr-white-500 p-4 d-flex jc-center ai-center">
                  <i class="icon-phone f-5 clr-green-500 l-small"></i>
                  
                  <!-- content -->
                   <div class="header__content__cta__content">
                       <small class="d-block l-small">Vamos conversar?</small>
                       <a rel="nofollow noopener noreferrer" class="f-3 t-bold link-white-500" href="tel:<?= formatPhone(CONTACT['whatsapp']['number']); ?>"><?= CONTACT['whatsapp']['number']; ?></a>
                   </div> 
                  <!-- end of content -->
              </div>
             <!-- end of cta -->

             <!-- toggle -->
              <div class="header__content__toggle d-none bg-dark-blue-500">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
             <!-- end of toggle -->
         </div>
        <!-- end of content -->

    </div>
</header>