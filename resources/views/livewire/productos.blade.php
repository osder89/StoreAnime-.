<x-slot name="header">
    <h1 class="text-gray-900">Crud productos</h1>
</x-slot>

<div class="py-12">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            
            @if(session()->has('message'))
            <div class="bg-indigo-600 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{session('message')}}</h4>
                    </div>

                </div>

            </div>
            @endif


            <button wire:click="crear()" class=" bg-red-500  hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if($modal)
              @include('livewire.crear')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Cantidad</th>
                        <th class="px-4 py-2">Descripcion</th>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{$producto->id}}</td>
                        <td class="border px-4 py-2">{{$producto->nombre}}</td>
                        <td class="border px-4 py-2">{{$producto->precio}}</td>
                        <td class="border px-4 py-2">{{$producto->cantidad}}</td>
                        <td class="border px-4 py-2">{{$producto->descripcion}}</td>
                        <td class="border px-4 py-2">{{$producto->imagen}}</td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$producto->id}})" class="bg-indigo-600 hover:bg-gray-300 text-white font-bold py-2 px-4 ">Editar</button>
                            <button wier:click="eliminar({{$producto->id}})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 ">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
