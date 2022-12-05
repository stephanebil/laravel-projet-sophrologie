<x-layouts.main-layout title="La Sophrologie" >
 
    <div class="">
        <x-formatpages.formatpage titleprincipal="Qu'est ce que la sophrologie?" img1="sophrologiesmall.jpg" img2="individual3.jpg"/>
    </div>
    <div class=" px-20 grid grid-flow-row-dense sm:grid-flow-row-dense sm:grid-cols-3 gap-20  justify-between items-center py-8 md:py-32 ">
        <div class="">
            <x-cardhome.cardhome titlebutton="Déroulement d'une séance" img="img/deroulementsmall.jpg" href="{{ route('onesession') }}" />
        </div>
        <div class="">
            <x-cardhome.cardhome titlebutton="Sophrologie en groupe" img="img/groupsmall.jpg" href="{{ route('groupsophro') }}" />
        </div>
        <div class="">
            <x-cardhome.cardhome titlebutton="Sophrologie individuelle" img="img/individualsmall.jpg" href="{{ route('individualsophro') }}" />
        </div>
    </div>
</x-layouts.main-layout>