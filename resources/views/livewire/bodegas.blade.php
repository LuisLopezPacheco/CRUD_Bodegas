<x-slot name="header">
    <h1 class="text-gray-900">CRUD Bodegas</h1>
</x-slot>

    <div class="py-12">
        <div class="ax-w-7xl mx-auto sm:px6 lg:px-8">
            <div class="text-left w-full4 ">
                @if(session()->has('message'))
                    <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3 md:flex" role="alert">
                        <div class="flex md:flex">
                            <div>
                                <h4>{{ session('message')}}</h4>
                            </div>
                        </div>
                    </div>
                @endif

                <button wire:click="crear()" class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
                @if($modal)
                    @include('livewire.crear')   
                @endif
                
                <table class="text-left w-full">
                    <thead class="bg-black flex text-white w-full">
                        <tr class="flex w-full mb-4 ">
                            <th class="p-4 w-1/6">ID</th>
                            <th class="p-4 w-1/5">Nombre</th>
                            <th class="p-4 w-1/5">pais</th>
                            <th class="p-4 w-1/5">estado</th>
                            <th class="p-4 w-1/5">municipio</th>
                            <th class="p-4 w-1/5">colonia</th>
                            <th class="p-4 w-1/5">Calle</th>
                            <th class="p-4 w-1/5">Num Est</th>
                            <th class="p-4 w-1/5">Descripción</th>
                            <th class="p-4 w-1/5" width="110px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                        @foreach($bodegas as $bodega)
                        <tr class="flex w-full mb-4">
                            <td class="p-4 w-1/6">{{$bodega->id}}</td>
                            <td class="p-4 w-1/5">{{$bodega->nombre}}</td>
                            <td class="p-4 w-1/5">{{$bodega->pais}}</td>
                            <td class="p-4 w-1/5">{{$bodega->estado}}</td>
                            <td class="p-4 w-1/5">{{$bodega->municipio}}</td>
                            <td class="p-4 w-1/5">{{$bodega->colonia}}</td>
                            <td class="p-4 w-1/5">{{$bodega->calle}}</td>
                            <td class="p-4 w-1/5">{{$bodega->num_establecimiento}}</td>
                            <td class="p-4 w-1/5">{{$bodega->descripcion}}</td>
                            <td>
                                <button wire:click="editar({{$bodega->id}})" class="border-grey-light border hover:bg-gray-100 p-3 text-blue-400 hover:text-blue-600 hover:font-medium cursor-pointer">Editar</button>
                                <button wire:click="borrar({{$bodega->id}})" class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">Borrar</button>
                                
                                {{-- <div class="inline-flex">
                                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                    Prev
                                    </button>
                                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                    Next
                                    </button>
                                </div> --}}
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                   
            </div>
        </div>
    </div>

