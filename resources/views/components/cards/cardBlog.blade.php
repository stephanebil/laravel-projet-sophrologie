@props(['url_img', 'title', 'content', 'author','updated_at'])
<div class="p-4 bg-graybg hover:bg-white rounded-lg shadow-lg my-8 duration-300  ">
    <img src="{{ asset('storage/' . $url_img ) }}" alt="{{ $title }}" class=" rounded-lg ">
    <div class="text-center py-4">
        <p class="text-goldfirst font-bold text-lg">{{ $title }}</p>
        <p class="py-6">{{ Str::substr($content, 0, 120) }}...</p>
        <p class="font-semibold text-sm text-bluefirst ">De <span class="text-base">{{ $author }}</span></p>
        <p class="text-gray-400 text-xs italic text-left pt-6">{{ $updated_at }}</p>
    </div>
</div>