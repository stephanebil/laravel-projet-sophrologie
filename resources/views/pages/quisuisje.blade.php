<x-layouts.main-layout title="Qui suis-je" >
    <section class="px-6 md:px-20 pt-20 md:pt-32 md:pb-20 pb-6">
        <h1 class="py-20 font-bold text-xl text-center md:text-4xl lg:text-6xl text-bluefirst">Qui suis-je ?</h1>
        <p class="text-center text-bluefirst font-bold sm:px-10 md:px-20 lg:px-60 xl:px-72 ] ">Au commencement de Sophro au Naturel, il y a moi : Valérie Delcourt.</p>
        <p class="text-center text-bluefirst py-8 sm:px-10 md:px-20 lg:px-60 xl:px-72 ] ">Se présenter en quelques mots est un véritable exercice. Je suis Julie, souriante telle un rayon de soleil, bienveillante, comme une main tendue entre vous et vous-même. Et pour le reste, venez me rencontrer, vous verrez par vous-même.</p> 
    </section>
    <section class="bg-[#ecedee] px-6 md:px-20">   
        <h2 class="pt-10 pb-4 md:py-20 font-bold text-lg text-center md:text-2xl lg:text-4xl text-goldfirst">Sophrologue</h2>
        <div class="lg:flex justify-between items-center lg:space-x-16">
            <div class="">
                <p class="text-center text-bluefirst py-4">Mes valeurs, celles de Sophro au naturel sont : la liberté (de penser, d’agir), l’autonomie (pour remettre les techniques et conseils en pratique chez vous), la famille. J’ajoute également la transparence et l’épanouissement.</p>
                <p class="text-center text-bluefirst font-bold py-8">Auparavant, j’ai travaillé 10 ans en tant qu’assistante commerciale pour l’Export dans des entreprises et des multinationales. J’ai connu les chiffres et les objectifs, l’organisation de salons à l’étranger, les papiers et les procédures…</p>
                <p class="text-center text-bluefirst py-4">Puis, je deviens sophrologue. Ces deux métiers reflètent deux passions qui m’animent. Ces deux techniques de bien-être et de développement personnel me semblent tellement essentiels à cultiver pour être véritable bien avec soi, avec son corps et son mental.</p>
            </div>
            <img src="img/valeriedelcourt2.jpg" alt="Valérie Delcourt" class=" lg:w-[45%] sm: mt-4 rounded-full px-[10%] sm:px-[15%] lg:px-0">
        </div>
    </section> 
    <section class="bg-[#ecedee] px-20">   
        <div class="md:flex md:space-x-16 text-center py-16 md:py-20 justify-center ">
            <div class="py-4">
                <x-items.buttonsophro title="contactez moi" href="{{ route('contact') }}"/> 
            </div>
            <div class="py-4">
                <x-items.buttonsophro href="{{ route('rdv') }}" title="Prendre RDV" />
            </div>
        </div>
    </section>
</x-layouts.main-layout>