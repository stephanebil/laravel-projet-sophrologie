@props(['item', 'routeItem'])

<div class="">
    <form action="{{ route($routeItem, $item->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce post?')">
        @csrf
        @method('DELETE')
        <button class="bg-goldfirst text-bluefirst duration-300 hover:bg-red-500 hover:text-white p-3 rounded-lg" type="submit">Supprimer</button>
    </form>
</div>