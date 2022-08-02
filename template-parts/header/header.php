<header class="header sticky py-6 bg-white z-50">
   <div class="container">
      <!-- row -->
      <div class="header__row flex justify-between items-center relative">
         <!-- brand -->
         <div class="header__row__brand">
            <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
               <img src="<?= image('logo-topo.svg'); ?>" alt="Logo <?= SITE['name']; ?>" loading="lazy">
            </a>
         </div>
         <!-- end of brand -->

         <!-- wrapper -->
         <div class="header__row__wrapper">

            <!-- cta -->
            <div class="header__row__wrapper__cta mb-4 font-medium leading-none flex justify-end items-center gap-1">
               <i class="ri-phone-fill text-primary-500"></i>
               <a rel="nofollow noopener noreferrer" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" title="Vamos agendar uma consulta?" target="_blank" class="link-primary-500"><?= CONTACT['phone']['01'] ?></a>
            </div>
            <!-- end of cta -->

            <!-- nav -->
            <div class="header__row__wrapper__nav">
               <nav class="header__row__wrapper__nav__navbar">
                  <h2 class="hidden">Menu de navegação</h2>

                  <?php
                  wp_nav_menu([
                     'theme_location' => 'menu',
                     'menu_class' => 'header__row__wrapper__nav__navbar__content__menu flex flex-row gap-10 text-base',
                     'menu_id' => 'menu',
                     'container_class' => 'header__row__wrapper__nav__navbar__content'
                  ]);
                  ?>
               </nav>
            </div>
            <!-- end of nav -->

         </div>
         <!-- end of wrapper -->

         <!-- toggle -->
         <div class="header__row__toggle p-4 bg-neutral-100 rounded-md cursor-pointer shadow-2xl hidden">
            <!-- wrapper -->
            <div class="header__row__toggle__wrapper flex flex-wrap flex-col gap-2">
               <span class="w-10 h-1 bg-primary-700 rounded-full"></span>
               <span class="w-10 h-1 bg-primary-700 rounded-full"></span>
               <span class="w-10 h-1 bg-primary-700 rounded-full"></span>
            </div>
            <!-- end of wrapper -->

         </div>
         <!-- end of toggle -->
      </div>
      <!-- end of row -->
   </div>
</header>