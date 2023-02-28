<nav class="m-5">
    <x-validation-errors class="mb-4" />
    <form wire:submit.prevent='leerDatos' class="flex max-sm:flex-col sm:items-center gap-4">
        <div class="flex max-sm:flex-col sm:items-center">
            <x-label for="nombre" :value="__('Buscar:')"/>
            <x-input-text wire:model="nombre" id="nombre" placeholder="Nombre del producto" class="bg-stone-300"/>
        </div>
        <div class="flex max-sm:flex-col sm:items-center">
            <x-label for="precio_minimo" :value="__('Buscar por precio:')" />
            <div class="flex flex-col gap-2">
                <x-input-text wire:model="precio_minimo" id="precio_minimo" placeholder="Precio mínimo" class="bg-stone-300"/>
                <x-input-text wire:model="precio_maximo" placeholder="Precio máximo" class="bg-stone-300"/>        
            </div>
        </div>  
        <div class="flex justify-end">
            <input 
                type="submit"
                class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                value="Buscar"
            />
        </div>  
    </form>
</nav>
