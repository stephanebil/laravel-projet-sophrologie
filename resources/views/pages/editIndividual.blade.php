@php
    $style = "rounded w-full block mb-3"
@endphp


<x-layouts.main-layout title="Modification RDV individuel" >
 
     <div class="px-6 md:px-20 py-32">
       <h1 class="py-20 font-bold text-xl text-center md:text-4xl lg:text-6xl text-bluefirst ">Modifier un Rendez-vous individuel</h1>
       <form action="{{ route('listindividuals.update', $listindividual->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                    <input type="text" name="name" placeholder="Votre nom et prénom" value="{{ old('name', $listindividual->name) }}" class="{{ $style }}">
                    <x-items.error-msg name="name" />
            </div>
            <div class="">
                    <input type="text" name="email" placeholder="Votre adresse Email" value="{{ old('email', $listindividual->email) }}" class="{{ $style }}">
                    <x-items.error-msg name="email" />
            </div>
            <div class="">
                    <input type="tel" name="phone_number" placeholder="Votre numéro de téléphone" minlength="10" maxlength="10" value="{{ old('phone_number', $listindividual->phone_number) }}" class="{{ $style }}">
                    <x-items.error-msg name="phone_number" />
            </div>
            <div class="">
                    <input type="text" name="address" placeholder="Votre adresse postale" value="{{ old('address', $listindividual->address) }}" class="{{ $style }}">
                    <x-items.error-msg name="address" />
            </div>
            <div class="">
                    <textarea name="message" id="" cols="30" rows="10" class="{{ $style }}" placeholder="Laissez votre message ici">{{ old('message', $listindividual->message) }}</textarea>
                    <x-items.error-msg name="message" />
            </div>
            
            
            <button type="submit" class="text-xs font-semibold py-2 px-3 md:text-base md:py-4 md:px-6 md:font-bold text-goldfirst bg-bluefirst rounded-lg hover:bg-goldhover hover:text-bluehover duration-300">Envoyer</button>
        </form>
    </div>

</x-layouts.main-layout>