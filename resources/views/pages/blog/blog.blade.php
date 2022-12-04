<x-layouts.main-layout title="Blog" >
    <section class="px-6 md:px-20 py-32 mt-24 ">
        <h1 class="text-center font-bold text-bluefirst text-lg sm:text-xl md:text-2xl lg:text-4xl">Blog de Valérie Sophrologie</h1>
        <div class="lg:flex lg:space-x-6 py-6 lg:justify-between min-h-[30%] md:grid md:grid-flow-row-dense  md:grid-cols-2 md:gap-20 lg:grid-cols-0 lg:gap-0  ">
            @forelse ($blogs as $blog)
            <div class="lg:w-[40%]">
                <a href="blogs/{{ $blog->id }}" class="">        
                    <x-cards.cardBlog :title="$blog->title" :content="$blog->content" :url_img="$blog->url_img" :author="$blog->author" :updated_at="$blog->updated_at"/>
                </a>
            </div>
            @empty
                <p class="">Pas de blog pou l'instant.</p> 
            @endforelse
        </div>
        <div class="">
            {{ $blogs->links() }}
        </div>
    </section>
</x-layouts.main-layout>