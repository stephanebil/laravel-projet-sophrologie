@props([
    'img',
    'href',
    'titlebutton'
])
<div class=" transition ease-in-out hover:scale-105 w-full  sm:w-[130px]  md:w-[180px]  lg:w-[280px]  xl:w-full hover:animate- bg-goldfirst  text-bluefirst hover:text-goldfirst hover:bg-bluefirst hover:text-lg rounded-xl shadow-lg duration-300 ">
    <a href="{{ $href }}" class="">
        <img src="{{ $img }}" alt="bouton {{ $titlebutton }} deroulement de la seance" class=" rounded-xl ">
        <p class="text-center p-2 py-4 sm:w-[130px]  md:w-[180px]  lg:w-[280px]  xl:w-full     font-bold duration-300">{{ $titlebutton }}</p>
    </a>
</div>