@props(['url_img', 'title', 'content'])
<div class="">
    <img src="{{ $url_img }}" alt="">
    <div class="">
        <p class="">{{ $title }}</p>
        <p class="">{{ Str::substr($content, 0, 500) }}</p>
        <p class="">{{ $author }}</p>
    </div>
</div>