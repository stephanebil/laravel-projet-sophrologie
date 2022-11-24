@props([
    'href',
    'title'
])
<a href="{{ $href }}" class="text-xs font-semibold py-2 px-3 md:text-base md:py-4 md:px-6 md:font-bold text-goldfirst bg-bluefirst rounded-lg hover:bg-goldhover hover:text-bluehover duration-300 ">{{ $title }}</a>