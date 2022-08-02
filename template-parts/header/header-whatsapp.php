<div class="whatsapp fixed text-5xl text-white bg-whatsapp-500 rounded-full shadow-2xl z-40">
   <div class="whatsapp__content">
      <?= whatsapp(
         formatPhone(CONTACT["whatsapp"]["number"]),
         CONTACT["whatsapp"]["message"],
         '<span class="hidden">WhatsApp</span>
                    <i class="ri-whatsapp-line"></i>',
         'w-20 h-20 flex justify-center items-center'
      ); ?>
   </div>
</div>