<x-layouts.main-layout title="Sophrologie en groupe" >
    <div class="">
        <x-formatpages.formatpage titleprincipal="Sophrologie en groupe" img1="group2.jpg" img2="group3.jpg"/>
    </div>
    <div class=" md:flex px-20 justify-center md:space-x-20 items-center py-8 md:py-32  ">
        <div class="">
            <x-items.buttonsophro2 titlebutton2="Déroulement d'une séance"  href="{{ route('onesession') }}" />
        </div>
        <div class="">  
            <x-items.buttonsophro2 titlebutton2="Sophrologie individuelle"  href="{{ route('individualsophro') }}" />
        </div>
    </div>
</x-layouts.main-layout>