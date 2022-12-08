@props([
    'img',
    'text',
    'name'
])

<div class="grid  justify-items-center py-8">
    <img src="img/{{ $img }}" alt="{{ $name }}" class="w-[30%] rounded-full border-goldfirst border-spacing-2 border-8 shadow-xl">
    <p class="p-8 text-center font-bold text-goldfirst tex-lg italic text-xl">{{ $name }}</p>
    <p class="p-8 text-center font-bold text-bluefirst tex-lg italic ">{{ $text }}</p>
</div>