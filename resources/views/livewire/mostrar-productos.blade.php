<main class="flex flex-col m-5">
    <input wire:click="$emit('openModal')" type="submit" value="+ Agregar un nuevo producto" class="bg-rose-500 text-slate-300 hover:cursor-pointer border-gray-300 focus:ring-indigo-500 rounded-md shadow-sm p-2">
    <ul>
        @forelse ($productos as $producto)            
            <li>
                <h2 class="font-bold">{{ $producto->nombre }} - ${{ $producto->precio }}</h2>
                <p class="bg-yellow-300 p-3 rounded-md">{{ $producto->descripcion }}</p>
            </li>              
        @empty
            <p class="p-3 text-center text-sm text-gray-600">
                Aún no hay productos
                <i class="fa-solid fa-face-sad-tear"></i>
            </p>
        @endforelse
    </ul>
</main>
