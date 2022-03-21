<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form method="POST">
                    @csrf 
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" wire:model="nombre">
                            @error('nombre')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pais" class="block text-gray-700 text-sm font-bold mb-2">País:</label>
                            <div class="flex justify-start">
                                <div class="mb-3 xl:w-96">
                                    <select class="form-select appearance-none
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" id="pais" wire:model="pais">
                                        <option selected>Seleccione País</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Estados Unidos">Estados Unidos</option>
                                    </select>
                                    @error('pais')
                                        <p class="form-text text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                              </div>
                        </div>

                        <div class="mb-4">
                            <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="estado" wire:model="estado">
                            @error('estado')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="municipio" class="block text-gray-700 text-sm font-bold mb-2">Municipio:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="municipio" wire:model="municipio">
                            @error('municipio')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="colonia" class="block text-gray-700 text-sm font-bold mb-2">Colonia:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="colonia" wire:model="colonia">
                            @error('colonia')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="calle" class="block text-gray-700 text-sm font-bold mb-2">Calle:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="calle" wire:model="calle">
                            @error('calle')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="num_establecimiento" class="block text-gray-700 text-sm font-bold mb-2">Num establecimiento:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="num_establecimiento" wire:model="num_establecimiento">
                            @error('num_establecimiento')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                            <textarea type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" wire:model="descripcion"></textarea>
                            @error('descripcion')
                                <p class="form-text text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>    
            </div>
    </div>
</div>