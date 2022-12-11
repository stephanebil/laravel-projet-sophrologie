<x-layouts.main-layout title="Sophrologie individuelle" >
    <div class="">
        <x-formatpages.formatpage 
        titleprincipal="Sophrologie individuelle" 
        img1="individual2.jpg" 
        img2="sophrologie3small.jpg"
        title2="Une séance conçue pour vous."
        title3="Ma pratique de la sophrologie"
        content1="Selon votre besoin, vous optez entre des séances unitaires que vous réservez au fur. Il n’entraîne aucune obligation de réussite dans le sens où vous seul êtes acteur de votre propre changement. "
        content2="Je m’adapte aux demandes et besoins de mes clients. J’intègre les contraintes de chacun. J’ai une préférence pour une séance en présentiel car la relation de confiance s’installe, à mon sens, aussi par le feeling entre vous et moi. Le feeling passe par une forme de sensibilité, de ressentis quant à ma qualité d’écoute et de présence.Une séance de sophrologie dure généralement entre 45 min et 1h15."
        content3="J’interviens également en structure, en présentiel ou à distance (visio possible). Vivre la sophrologie requiert aucune condition physique particulière. Les techniques et stimulations sont très douces, et vous les adaptez à chaque instant selon vos possibilités. La séance se déroule debout ou assis, afin de pouvoir être reproduite plus facilement au quotidien, en fonction du moment où vous en ressentez le besoin. La sophrologie s’effectue dans le bruit ambiant naturel, sans (auto-)conditionnement auditif particulier. Je vous accompagne, avec le minimum d’induction possible pour rester neutre et ainsi favoriser votre liberté et votre autonomie."
        />
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