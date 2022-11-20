<x-layouts.main-layout title="Tarif" >
 
    <section class="px-6 md:px-20 pt-16 sm:pt-20 md:pt-32 md:pb-20 pb-6">
        <h1 class="py-20 font-bold text-xl text-center md:text-4xl lg:text-6xl text-bluefirst">Tarif</h1>
        <p class="text-center text-bluefirst ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia cupiditate facilis, officiis delectus illum pariatur  Eveniet vitae, delectus distinctio commodi rerum reprehenderit ipsam fugit culpa nobis aut, fuga autem accusamus dolor magni natus!</p>
    </section>
    <section class="bg-[#ecedee]  px-6 md:px-20 sm:flex md:space-x-20 sm:space-x-6 py-10">   
        <div class="bg-bluefirst my-4 rounded-3xl h-[200px] md:h-[400px] hover:bg-bluehover duration-300 sm:w-[50%] shadow-xl hover:shadow-none">
            <h2 class="pt-10 pb-4 md:py-20 font-bold text-xl text-center md:text-2xl lg:text-4xl text-goldfirst">Séance Individuelle</h2>
            <div class="">
                <p class="text-center font-semibold text-goldfirst py-4">séance adulte (1h) : xx €</p>
                <p class="text-center font-semibold text-goldfirst py-4">séance enfant (45min) : xx €</p>
            </div>
        </div>
        <div class="bg-goldfirst my-4 rounded-3xl h-[200px] md:h-[400px] hover:bg-goldhover duration-300 sm:w-[50%] shadow-xl hover:shadow-none">
            <h2 class="pt-10 pb-4 md:py-20 font-bold text-xl text-center  md:text-2xl lg:text-4xl text-bluefirst">Séance Groupe</h2>
            <div class="">
                <p class="text-center font-semibold text-bluefirst py-4">Cotisation Trimestrielle : xx €</p>
                <p class="text-center font-semibold text-bluefirst py-4">Cotisation Annuelle : xx €</p>
            </div>
        </div>
    </section> 
    
     
    <section class="px-20">   
        <div class="md:flex md:space-x-16 text-center py-16 md:py-20 justify-center ">
            <div class="py-4">
                <x-items.buttonsophro title="contactez moi" href="{{ route('contact') }}"/> 
            </div>
            <div class="py-4">
                <x-items.buttonsophro href="{{ route('rdv') }}" title="Prendre RDV" />
            </div>
        </div>
    </section>
    <section class="mt-10">
        <img src="img/deroulementsmall.jpg" alt="paysage" class="w-full md:h-0">
        <img src="img/deroulement2small.jpg" alt="paysage" class="h-0 md:h-full md:w-full">
    </section>

</x-layouts.main-layout>