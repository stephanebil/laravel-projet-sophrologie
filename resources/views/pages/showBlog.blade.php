<x-layouts.main-layout title="Show Blog" >
    <section class="px-4 md:px-20  ">
            <h1 class="text-center font-bold text-goldfirst sm:text-xl md:text-2xl lg:text-4xl py-10 md:py-16">{{ $blog->title }} </h1>
            <img src="{{ $blog->url_img }}" alt="" class="rounded-lg w-[320px] md:ml-[15%] md:w-[70%]">
            <div class="pt-5">
                <p class="text-gray-500 italic">{{ $blog->updated_at }}</p>
                <p class="text-bluefirst py-6">{!! nl2br(e($blog->content)) !!}</p>
                <p class="text-bluefirst font-bold">Auteur: <span class="text-goldfirst">{{ $blog->author }}</span></p>
            </div>
            <div class="py-6 md:py-16">
                <x-items.buttonsophro title="Retour Blog"  href="{{ route('blog') }}" />
            </div>
            @auth
                <div class="py-8 flex space-x-5 gap-6 justify-center">
                    <a href="" class=" bg-bluehover text-goldhover duration-300 hover:bg-green-600 hover:text-white p-2 rounded-lg">Modifier</a>
                    <x-items.btn-delete :item="$blog" routeItem="blogs.destroy" />
                </div>   
            @endauth  
    </section>
</x-layouts.main-layout>