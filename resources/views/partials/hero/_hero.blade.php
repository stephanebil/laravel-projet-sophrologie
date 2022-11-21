<section>
    <div class=' flex flex-col items-center justify-center'>
        <div class="relative">
            <img src="img/imghero.jpg" alt="image hero" class=" w-screen lg:w-0 pt-20 z-0">
            <img src="img/imgheroreduce.jpg" alt="image hero" class="w-0 lg:w-screen  z-0">
        </div>
        <div class="absolute top-0 z-10 mt-[45%] md:mt-[35%] lg:mt-[20%]">    
            <div class=" text-center">
                <h1 class='text-sm md:text-2xl bg-goldfirst bg-opacity-60 lg:text-4xl py-2 px-2 md:py-8 md:px-8 rounded-xl font-black text-bluefirst'>Bienvenue sur Valérie Delcourt Sophrologie</h1>
            </div>    
            <div class="text-center mt-4 md:mt-20">
                <x-items.buttonsophro href="{{ route('rdv') }}" title="Prendre RDV" />
            </div>   
        </div>
    </div>
</section>