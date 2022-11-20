<x-layouts.main-layout title="Sophrologie individuelle" >
    <div class="">
        <x-formatpages.formatpage titleprincipal="Sophrologie individuelle" img1="individual2.jpg" img2="sophrologie3small.jpg"/>
    </div>
    <div class=" md:flex px-20 justify-center md:space-x-20 items-center py-8 md:py-32 ">
        <div class="">
            <x-items.buttonsophro2 titlebutton2="Déroulement d'une séance"  href="{{ route('onesession') }}" />
        </div>
        <div class="">
            <x-items.buttonsophro2 titlebutton2="Sophrologie en groupe" href="{{ route('groupsophro') }}" />
        </div>
    </div>
</x-layouts.main-layout>