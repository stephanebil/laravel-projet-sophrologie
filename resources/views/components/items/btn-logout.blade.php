<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button href="{{ route('logout') }}" type="submit" class="uppercase hover:text-goldhover hover:bg-bluehover px-3 py-2 rounded-lg duration-300">Déconnexion</button>
</form>