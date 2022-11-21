<x-layouts.main-layout title="Bienvenue sur le Dashboard" >
    <div class="py-32 md:px-20 px-6">
        <h1 class="text-center font-bold text-bluefirst text-lg sm:text-xl md:text-2xl lg:text-4xl ">Bienvenue sur votre tableau de bord!</h1>
        <p class="my-10 text-center bg-goldfirst p-2 md:text-lg text-bluefirst rounded-xl text-xs sm:w-[50%] md:ml-[25%] sm:ml-[20%] ">Bonjour <span class="font-bold">{{ Auth::user()->name }}</span>, Ravi de vous revoir!</p>
        <div class="py-10">  
            <div class="py-4">
                {{-- <x-items.buttonsophro title="Ajouter un Post du blog" href="{{ route('blogs.create') }}" /> --}}
            </div>
            <div class="py-4">
                {{-- <x-items.buttonsophro title="Modifier un Post du blog" href="{{ route('blogs.edit') }}" /> --}}
            </div>
        </div> 
    </div>
</x-layouts.main-layout>