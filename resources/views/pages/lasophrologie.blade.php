<x-layouts.main-layout title="La Sophrologie" >
    <div class="">
        <x-formatpages.formatpage 
        titleprincipal="Qu'est ce que la sophrologie?" 
        img1="sophrologiesmall.jpg" 
        img2="individual3.jpg" 
        title2="Concrètement, qu’est-ce qu’est la sophrologie ?" 
        title3="Les fausses idées : ce en quoi elle ne se résume pas ?" 
        content1="Vivre dans le moment présent et dans son corps, c’est le véritable cadeau du temps présent. La sophrologie est une pédagogie de l’existence. À ce titre, elle est adaptée en préventif pour apprendre à décélérer le temps, retrouver son corps et ses sensations, ses ressentis dans le moment présent" content2="C’est un ensemble des pratiques de respiration, d’évocation mentale (visualisation) et de relaxations dynamiques par des mouvements doux et des étirements. Sa pratique ne requiert aucune condition physique particulière car les techniques et stimulations sont très douces. De plus, vous les adaptez à vous-même, à chaque instant selon vos possibilités du moment. Les techniques et stimulations s’effectuent idéalement en position debout ou assise (elle s’adapte au besoin). En effet, ces positions debout/assis s’expliquent par l’intérêt d’être acteur, d’être dans le mouvement pour ressentir son corps dans l’instant présent." 
        content3="La sophrologie ne se résume pas à de la relaxation dont c’est l’un des aspects. Egalement, elle n’est pas une gymnastique douce. Par le mouvement et la respiration contrôlée, elle amène à une autre conscience : le schéma corporel (le corps) comme vecteur de la conscience. Ensuite, ce n’est pas une boîte à outils qui apporte une solution pour un problème défini. Il n’y a pas de protocole type ou clef en main. Je personnalise les pratiques  en fonction de vos besoins du moment, et ce, au début de chaque séance.  Le début d’une séance, c’est comme une première fois, avec un regard sans cesse renouvelé. Puis, cette technique ne permet pas un retour vers une autre vie. Elle est majoritairement centrée sur le présent et les ressentis dans l’instant présent, dans l’ici et maintenant. Des techniques spécifiques au futur et/ou au passé peuvent être utilisées, lorsque c’est nécessaire et après avoir une certaine maîtrise du temps présent."/>
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