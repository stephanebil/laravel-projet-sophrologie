<section class="bg-[#ecedee] ">
    <div class="px-6 md:px-20 pb-20 py-6 md:py-20">
        <x-items.h2sophro title="Comment ça se passe?"/>
        <div class=" grid grid-flow-row-dense sm:grid-flow-row-dense sm:grid-cols-3 gap-20  justify-between items-center py-8 md:py-32 ">
            
            <div class="">
                <x-accueil.cardaccueil titlebutton="Déroulement d'une séance" img="img/deroulementsmall.jpg" href="{{ route('onesession') }}" />
            </div>
            <div class="">
                <x-accueil.cardaccueil titlebutton="Sophrologie en groupe" img="img/groupsmall.jpg" href="{{ route('groupsophro') }}" />
            </div>
            <div class="">
                <x-accueil.cardaccueil titlebutton="Sophrologie individuelle" img="img/individualsmall.jpg" href="{{ route('individualsophro') }}" />
            </div>
        </div>
        <div class="md:flex md:space-x-16 text-center py-10 justify-center ">
            <div class="py-4">
                <x-items.buttonsophro title="contactez moi" href="{{ route('contact') }}"/> 
            </div>
            <div class="py-4">
                <x-items.buttonsophro href="{{ route('rdv') }}" title="Prendre RDV" />
            </div>
        </div>
    </div>
</section>