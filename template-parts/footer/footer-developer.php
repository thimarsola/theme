<div class="footer__developer bg-primary-500 py-1 text-white text-sm leading-none">
   <div class="container">
      <!-- row -->
      <div class="footer__developer__row flex justify-between items-center flex-wrap gap-1">

         <!-- agency -->
         <div class="footer__developer__row__agency text-center">
            <p>Desenvolvido por <a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" class="link-primary-300 font-medium" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a>
            </p>
         </div>
         <!-- end of agency -->

         <!-- validator -->
         <?php if (!is_404()) : ?>
            <div class="footer__developer__row__validator">
               <?php
               $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

               if (is_home()) {
                  $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
               } elseif (is_single()) {
                  $urlBase = str_replace($protocols, "", get_the_permalink());
               } else {
                  $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
               }
               ?>

               <a rel="nofollow noreferrer noopener" class="link-primary-300 leading-none text-center" href="https://validator.w3.org/nu/?doc=https%3A%2F%2F<?= $urlBase; ?>%2F" target="_blank" title="Tecnologia W3C">
                  <i class="ri-html5-fill align-middle text-base"></i>
                  <span class="font-medium align-middle">W3C Validator</span>
               </a>
            </div>
            <!-- end of validator -->
         <?php endif; ?>
      </div>
      <!-- end of row -->

   </div>
</div>