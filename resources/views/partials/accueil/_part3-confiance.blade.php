<section class="px-6 md:px-20 xl:px-96 py-24 ">
    <div class="py-6"><x-items.h2sophro title="Témoignages"/></div>
    
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance1.jpg' name="Rosalie Dupont" text="Merci Valérie. Vos séances individuelles m'ont sauvé la vie!"/>
        </div>
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance2.jpg' name="La Chaise" text="Merci Valérie. Maintenant je ne ressens plus de douleur au dossier, je peux donc accueillir des fessiers."/>
        </div>
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance3.jpg' name="Jean-Luc Mélanchon" text="Vos séances m'ont appris à me sentir un peu moins sacré mais un peu plus humble."/>
        </div>
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance4.jpg' name="François Barbet" text="J'accepte aujourd'hui ma barbe bleue, même si elle ne l'est pas."/>
        </div>
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance5.jpg' name="Mauricette Durant" text="Merci Valérie. Je me sens plus jeune que les jeunes et du coup je prends des cours de kick boxing."/>
        </div>
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance6.jpg' name="Robert Rainette" text="Super Valérie. Grâce à vos scéances en groupe qui m'ont fait beaucoup de bien, j'ai pu devenir champion du limousin de Judo!"/>
        </div>
        <div class="swiper-slide">
            <x-confiance.cardTestimony img='confiance7.jpg' name="Norbert Chang" text="Un grand Merci à vous. Partout où je suis, je ris."/>
        </div>
      </div>
      {{-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div> --}}
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
</section>