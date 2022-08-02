<aside class="sidebar basis-4-12">
   <!-- row -->
   <div class="sidebar__row flex flex-col gap-14">
      <!-- cta -->
      <div class="sidebar__row__cta bg-neutral-100 px-8 py-14 text-center">
         <!-- header -->
         <header class="sidebar__row__cta__header mb-6">
            <p class="text-base leading-none mb-2">Saúde, Qualidade de Vida e Estética</p>
            <h2 class="text-3xl font-bold text-primary-900">Agende já uma consulta</h2>
         </header>
         <!-- end of header -->

         <!-- body -->
         <div class="sidebar__row__cta__body">
            <p class="text-base mb-14">Clique no botão abaixo e agende sua consulta</p>

            <?= whatsapp(
               formatPhone(CONTACT["whatsapp"]["number"]),
               CONTACT["whatsapp"]["message"],
               'Agendar consulta',
               'btn-primary'
            ); ?>
         </div>
         <!-- end of body -->
      </div>
      <!-- end of cta -->

      <!-- categories -->
      <div class="sidebar__row__categories px-8 py-14 bg-neutral-100">

         <!-- header -->
         <header class="sidebar__row__categories__header text-2xl mb-6 text-primary-900 font-bold">
            <h2>Lista de Categorias</h2>
         </header>
         <!-- end of header -->


         <!-- content -->
         <div class="sidebar__row__categories__content">
            <ul class="list-disc list-inside flex flex-col gap-4">
               <?php
               wp_list_categories([
                  'title_li' => '',
                  'orderby' => 'name',
               ]);
               ?>
            </ul>
         </div>
         <!-- end of content -->
      </div>
      <!-- end of categories -->
   </div>
   <!-- end of row -->
</aside>