@props([
    'href',
    'titlebutton2'
])
<div class=" transition ease-in-out hover:scale-105 w-full  sm:w-[130px]  md:w-[180px]  lg:w-[300px]  hover:animate- bg-goldfirst  text-bluefirst hover:text-goldfirst hover:bg-bluefirst hover:text-lg rounded-xl shadow-lg duration-300 ">
    <a href="{{ $href }}" class="">
        <p class="text-center p-2 py-4 my-4    font-bold duration-300">{{ $titlebutton2 }}</p>
    </a>
</div>