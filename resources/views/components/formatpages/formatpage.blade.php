@props([
    'titleprincipal',
    'img1',
    'img2'
])


<section class="px-6 md:px-20 pt-20 md:pt-32 md:pb-20 pb-6">
    <h1 class="py-20 font-bold text-xl text-center md:text-4xl lg:text-6xl text-bluefirst">{{ $titleprincipal }}</h1>
    <p class="text-center text-bluefirst ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia cupiditate facilis, officiis delectus illum pariatur culpa sint tenetur quam, sapiente placeat recusandae, dolore sit! Impedit, aliquid temporibus consequatur repellendus reprehenderit fugiat consectetur quo culpa adipisci vero quod! Eveniet vitae, delectus distinctio commodi rerum reprehenderit ipsam fugit culpa nobis aut, fuga autem accusamus dolor magni natus!</p>
    <h2 class="pt-10 pb-4 md:py-20 font-bold text-lg text-center md:text-2xl lg:text-4xl text-goldfirst">Lorem ipsum dolor</h2>
    <div class="lg:flex justify-between items-center lg:space-x-16">
        <img src="../img/{{ $img1 }}" alt="{{ $titleprincipal }}goupe sophrologie 1" class="lg:w-[45%] rounded-lg">
        <p class="text-center text-bluefirst py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, suscipit perferendis? Aperiam velit odio vel, maxime deleniti aliquid sunt dolorem quod fuga, impedit nihil dicta officiis? Dignissimos earum modi mollitia distinctio fuga non eligendi eos quibusdam unde totam reprehenderit optio delectus atque placeat, molestias dolorem reiciendis nulla soluta facilis praesentium quisquam vitae est nisi repellendus! Nisi, iste quia. Vero quasi in velit nulla cupiditate dicta illo accusamus quas deleniti aperiam veritatis quisquam assumenda corporis, quaerat ipsum temporibus. Nihil saepe tempore ex expedita officiis fugiat maiores ea reiciendis! Aut praesentium saepe adipisci eos officia placeat quas delectus incidunt vel, nostrum modi, quia voluptatem facere illo itaque a minus distinctio alias quod aliquam! Nobis, enim. Quae expedita quam quas beatae minus enim.</p>
    </div>
</section>
<section class="bg-graybg px-6 md:px-20">   
    <h2 class="pt-10 pb-4 md:py-20 font-bold text-lg text-center md:text-2xl lg:text-4xl text-goldfirst">Lorem ipsum dolor</h2>
    <div class="lg:flex justify-between items-center lg:space-x-16">
        <p class="text-center text-bluefirst py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, suscipit perferendis? Aperiam velit odio vel, maxime deleniti aliquid sunt dolorem quod fuga, impedit nihil dicta officiis? Dignissimos earum modi mollitia distinctio fuga non eligendi eos quibusdam unde totam reprehenderit optio delectus atque placeat, molestias dolorem reiciendis nulla soluta facilis praesentium quisquam vitae est nisi repellendus! Nisi, iste quia. Vero quasi in velit nulla cupiditate dicta illo accusamus quas deleniti aperiam veritatis quisquam assumenda corporis, quaerat ipsum temporibus. Nihil saepe tempore ex expedita officiis fugiat maiores ea reiciendis! Aut praesentium saepe adipisci eos officia placeat quas delectus incidunt vel, nostrum modi, quia voluptatem facere illo itaque a minus distinctio alias quod aliquam! Nobis, enim. Quae expedita quam quas beatae minus enim.</p>
        <img src="../img/{{ $img2 }}" alt="{{ $titleprincipal }}goupe sophrologie 1" class="lg:w-[45%] rounded-lg">
    </div>
</section> 
<section class="bg-graybg px-20">   
    <div class="md:flex md:space-x-16 text-center py-16 md:py-20 justify-center ">
        <div class="py-4">
            <x-items.buttonsophro title="contactez moi" href="{{ route('listcontacts.create') }}"/> 
        </div>
        <div class="py-4">
            <x-items.buttonsophro href="{{ route('rdv') }}" title="Prendre RDV" />
        </div>
    </div>
</section>