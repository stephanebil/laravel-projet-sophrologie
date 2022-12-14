@php
    $style = "rounded w-full block mb-3"
@endphp

<x-layouts.main-layout title="Création de post pour le blog" >
    <section class="px-6 md:px-20 py-32">
       <h1 class="py-20 font-bold text-xl text-center md:text-4xl lg:text-6xl text-bluefirst ">Ajouter un Post</h1>
       <form action="{{ route('blogs.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="">
                    <input type="text" name="title" placeholder="Votre titre" value="{{ old('title') }}" class="{{ $style }}">
                    <x-items.error-msg name="title" />
            </div>
            <div class="">
                    <textarea name="content" id="" cols="30" rows="10" class="{{ $style }}" placeholder="Votre contenu">{{ old('content') }}</textarea>
                    <x-items.error-msg name="content" />
            </div>
            <div class="">
                    <input type="text" name="author" placeholder="Auteur" value="{{ old('author') }}" class="{{ $style }}">
                    <x-items.error-msg name="author" />
            </div>
            <div class="">
                    <input type="file" name="url_img" placeholder="Votre image ici" class="{{ $style }}">
                    <x-items.error-msg name="url_img" />
            </div>
            <button type="submit" class="text-xs font-semibold py-2 px-3 md:text-base md:py-4 md:px-6 md:font-bold text-goldfirst bg-bluefirst rounded-lg hover:bg-goldhover hover:text-bluehover duration-300">Envoyer</button>
        </form>
    </section>
</x-layouts.main-layout>