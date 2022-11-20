<x-layouts.main-layout title="déroulement d'une séance" >
    <div class="">
        <x-formatpages.formatpage titleprincipal="Déroulement d'une séance" img1="individual5.jpg" img2="group3.jpg"/>
    </div>
    <div class=" md:flex px-20 justify-center md:space-x-20 items-center py-8 md:py-32  ">
        <div class="">
            <x-items.buttonsophro2 titlebutton2="Sophrologie en groupe"  href="{{ route('groupsophro') }}" />
        </div>
        <div class="">
            <x-items.buttonsophro2 titlebutton2="Sophrologie individuelle"  href="{{ route('individualsophro') }}" />
        </div>
    </div>
</x-layouts.main-layout>