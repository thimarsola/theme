<header class="header flex justify-center items-center py-2">
   <div class="container">
      <!-- row -->
      <div class="header__row flex flex-nowrap items-center justify-between gap-2">
         <!-- social -->
         <div class="header__row__social text-sm">
            <ul class="flex flex-nowrap gap-2">
               <li>
                  <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook'] ?>" title="Siga a <?= SITE['name']; ?> no Facebook" target="_blank" class="link-white-500">Facebook</a>
               </li>


               <li>
                  <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram'] ?>" title="Siga a <?= SITE['name']; ?> no Instagram" target="_blank" class="link-white-500">Instagram</a>
               </li>
            </ul>
         </div>
         <!-- end of social -->

         <!-- brand -->
         <div class="header__row__brand">
            <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
               <img src="<?= image('logo.svg'); ?>" alt="Logo <?= SITE['name']; ?>" loading="lazy">
            </a>
         </div>
         <!-- end of brand -->

         <!-- toggle -->
         <div class="header__row__toggle flex justify-end">

            <!-- wrapper -->
            <div class="header__row__toggle__wrapper flex flex-column justify-center">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <!-- end of wrapper -->

         </div>
         <!-- end of toggle -->
      </div>
      <!-- end of row -->
   </div>

   <!-- wrapper -->
   <div class="header__wrapper bg-primary-500 text-white-500 p-10 f-4">
      <nav class="header__wrapper__navbar">
         <h2 class="hidden">Menu de navegação</h2>

         <?php
         wp_nav_menu([
            'theme_location' => 'menu',
            'menu_class' => 'header__wrapper__navbar__menu flex flex-column gap-3 justify-between uppercase',
            'menu_id' => 'menu',
            'container_class' => 'header__wrapper__navbar__menu'
         ]);
         ?>
      </nav>
   </div>
   <!-- end of wrapper -->
</header>