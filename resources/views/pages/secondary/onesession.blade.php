<x-layouts.main-layout title="déroulement d'une séance" >
    <div class="">
        <x-formatpages.formatpage 
        titleprincipal="Déroulement d'une séance" 
        img1="individual5.jpg" 
        img2="group3.jpg"
        title2="Une séance de sophrologie se déroule en plusieurs étapes"
        title3="Et plus précisément :"
        content1="Après un temps d’accueil, j’ouvre un temps de partage sur l’état du moment et annonce le déroulement de la séance. Après des explications sur les techniques (stimulations, « exercices »), le temps de la pratique est suivi par un nouveau temps de partage sur les ressentis en lien avec la pratique."
        content2="Temps d’accueil et de partage - Explications des pratiques - Pratique - Temps de partage - Temps pour les questions - Conseil(s) pour intégrer la sophrologie au quotidien"
        content3="Un moment est ensuite consacré aux questions éventuelles. Pour finir, je vous prodigue un conseil sur un entraînement possible à réaliser de votre côté, d’ici la prochaine séance. ​L’entraînement chez vous est facultatif. Il permet une appropriation des techniques et une autonomie plus rapide. Comme tout sportif s’entraîne, dans l’idéal, accordez-vous quelques instants pour vous exercer en autonomie, avec ce que vous avez retenu."
        />
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