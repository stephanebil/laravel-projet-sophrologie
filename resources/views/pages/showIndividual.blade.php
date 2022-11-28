<x-layouts.main-layout title="Show Contact RDV individuel" >
    <section class="px-4 md:px-20 py-32 ">
        <h1 class="text-center font-bold text-goldfirst sm:text-xl md:text-2xl lg:text-4xl py-10 md:py-16">{{ $listindividual->name }} </h1>
        <div class="pt-5">
            <p class="text-gray-500 italic">{{ $listindividual->updated_at }}</p>
            <p class="text-bluefirst py-6">{!! nl2br(e($listindividual->message)) !!}</p>
            <p class="text-bluefirst font-bold">Email: <span class="text-goldfirst"><a href="https://accounts.google.com/" target="_blank" class="">{{ $listindividual->email }}</a></span></p>
            <p class="text-bluefirst font-bold">Tel: <span class="text-goldfirst">{{ $listindividual->phone_number }}</span></p>
            <p class="text-bluefirst font-bold">Adresse: <span class="text-goldfirst">{{ $listindividual->address }}</span></p>
        </div>
        <div class="py-6 md:py-16">
            <x-items.buttonsophro title="Retour à la liste de Prise de RDV individuel"  href="{{ route('listIndividual') }}" />
        </div>
        
        <div class="py-8 flex space-x-5 gap-6 justify-center">
            <a href="{{ route('listindividuals.edit', $listindividual->id) }}" class=" bg-bluehover text-goldhover duration-300 hover:bg-green-600 hover:text-white p-2 rounded-lg">Modifier</a>
            <x-items.btn-delete :item="$listindividual" routeItem="listindividuals.destroy" />
        </div>   
    </section>
</x-layouts.main-layout>