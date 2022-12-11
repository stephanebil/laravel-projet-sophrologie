<x-layouts.main-layout title="Sophrologie en groupe" >
    <div class="">
        <x-formatpages.formatpage 
        titleprincipal="Sophrologie en groupe" 
        img1="group2.jpg" 
        img2="group3.jpg"
        title2="Les bienfaits basés sur les fondements de la sophrologie."
        title3="La sophrologie : bien plus que tout cela !"
        content1="La pratique de la sophrologie en groupe. Tous les bienfaits de la sophrologie, la dynamique de groupe, le partage et les rencontres en bonus. ​Les séances de groupe se déroulent tous les jeudis de 9h à 10h, ou de 19h30 à 20h30, à la maison des associations"
        content2="Temps d’accueil et de partage - Explications des pratiques - Pratique - Temps de partage - Temps pour les questions - Conseil(s) pour intégrer la sophrologie au quotidien"
        content3="La sophrologie est aussi une philosophie de vie qui permet de s’ancrer dans la réalité et le moment présent ; tel qu’il est étymologiquement, un cadeau. Elle permet aussi de se détendre et se relaxer, se relâcher physiquement et psychologiquement, mieux se connaître, connaître ses limites."
        />
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