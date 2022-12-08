<x-layouts.main-layout title="Liste de RDV individuels" >
    <section class="px-6 md:px-20 py-32 mt-24 ">
        <h1 class="text-center font-bold text-bluefirst text-lg sm:text-xl md:text-2xl lg:text-4xl">Liste des RDV individuels</h1>
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
                                <th>En cours</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listindividuals as $listindividual)
                                <tr class="hover:text-blue-500 border-2 h-16 text-center">
                                    <th> {{ $listindividual->id }} </th>
                                    <td> {{ $listindividual->name }} </td>
                                    <td>
                                        <a href="https://accounts.google.com/" target="_blank" class="text-goldfirst hover:text-lg duration-300">{{ $listindividual->email }}</a>  
                                    </td>
                                    <td> {{ $listindividual->phone_number }} </td>
                                    <td>
                                        <a href="listindividuals/{{ $listindividual->id }}" class="hover:font-bold hover:text-lg duration-300">voir</a>
                                    </td>
                                    <td>
                                        {{-- update --}}
                                        <a href="{{ route('listindividuals.edit', $listindividual->id) }}" class="bg-bluefirst text-goldfirst duration-300 hover:bg-blue-500 hover:text-white p-3 rounded-lg">Modifier</a>
                                    </td>
                                    <td>
                                        {{-- delete --}}
                                        <x-items.btn-delete :item="$listindividual" routeItem="listindividuals.destroy" />
                                    </td>
                                    @if ($listindividual->is_validated == 0)
                                        <td><p class="text-bluefirst">Non</p></td>  
                                    @else
                                        <td> <p class="text-green-500 text-xl font-bold">Oui</p></td>
                                    @endif
                                    @if ($listindividual->in_process == 0)
                                        <td><p class="text-bluefirst">Non</p></td>  
                                    @else
                                        <td> <p class="text-orange-500 text-xl font-bold">Oui</p></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="py-10">
                {{ $listindividuals->links() }}	
            </div>
        </div>
    </section>
</x-layouts.main-layout>
