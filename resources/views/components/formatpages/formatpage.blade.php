@props([
    'titleprincipal',
    'img1',
    'img2',
    'content1',
    'content2',
    'content3',
    'title2',
    'title3',
])


<section class="px-6 md:px-20 pt-20 md:pt-32 md:pb-20 pb-6">
    <h1 class="py-20 font-bold text-xl text-center md:text-4xl lg:text-6xl text-bluefirst">{{ $titleprincipal }}</h1>
    <p class="text-center text-bluefirst ">{{ $content1 }}</p>
    <h2 class="pt-10 pb-4 md:py-20 font-bold text-lg text-center md:text-2xl lg:text-4xl text-goldfirst">{{ $title2 }}</h2>
    <div class="lg:flex justify-between items-center lg:space-x-16">
        <img src="../img/{{ $img1 }}" alt="{{ $titleprincipal }}" class="lg:w-[45%] rounded-lg">
        <p class="text-center text-bluefirst py-4">{{ $content2 }}</p>
    </div>
</section>
<section class="bg-graybg px-6 md:px-20">   
    <h2 class="pt-10 pb-4 md:py-20 font-bold text-lg text-center md:text-2xl lg:text-4xl text-goldfirst">{{ $title3 }}</h2>
    <div class="lg:flex justify-between items-center lg:space-x-16">
        <p class="text-center text-bluefirst py-4">{{ $content3 }}</p>
        <img src="../img/{{ $img2 }}" alt="{{ $titleprincipal }}" class="lg:w-[45%] rounded-lg">
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