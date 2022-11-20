@props([
    'href',
    'title'
])
<a href="{{ $href }}" class="text-xs font-semibold py-2 px-3 md:text-base md:py-4 md:px-6 md:font-bold text-[#C3994D] bg-[#021a24] rounded-lg hover:bg-[#C3994D] hover:text-[#021a24] duration-300 ">{{ $title }}</a>