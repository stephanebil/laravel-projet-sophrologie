<x-layouts.main-layout title="Liste de RDV en groupe" >
    <section class="px-6 md:px-20 py-32 mt-24 ">
        <h1 class="text-center font-bold text-bluefirst text-lg sm:text-xl md:text-2xl lg:text-4xl">Liste des RDV en groupe</h1>
        <div class="  ">
            <div class="">
                @props(['name', 'email', 'phone'])
            <!-- table -->
                <div class="overflow-x-auto mt-16 ">
                    <table class="table w-full border-8">
                        <!-- head -->
                        <thead>
                            <tr class="">
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Tel</th>
                                <th>voir</th>
                                <th>modifier</th>
                                <th>Supprimer</th>
                                <th>Traité</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listgroups as $listgroup)
                                <tr class="hover:text-blue-500 border-2 h-16 text-center">
                                    <th> {{ $listgroup->id }} </th>
                                    <td> {{ $listgroup->name }} </td>
                                    <td>
                                        <a href="https://accounts.google.com/" target="_blank" class="">{{ $listgroup->email }}</a>  
                                    </td>
                                    <td> {{ $listgroup->phone_number }} </td>
                                    <td>
                                        <a href="listgroups/{{ $listgroup->id }}" class="hover:font-bold hover:text-xl">voir</a>
                                    </td>
                                    <td>
                                        {{-- update --}}
                                        <a href="{{ route('listgroups.edit', $listgroup->id) }}" class="bg-bluefirst text-goldfirst duration-300 hover:bg-blue-500 hover:text-white p-3 rounded-lg">Modifier</a>
                                    </td>
                                    <td>
                                        {{-- delete --}}
                                        <x-items.btn-delete :item="$listgroup" routeItem="listgroups.destroy" />
                                    </td>
                                    @if ($listgroup->is_validated == 0)
                                        <td><p class="text-red-500">Non</p></td>  
                                    @else
                                        <td> <p class="text-green-500">Oui</p></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="py-10">
                {{ $listgroups->links() }}	
            </div>
        </div>
    </section>
</x-layouts.main-layout>
