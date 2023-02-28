<form wire:submit.prevent="agregarProducto">
    <x-dialog-modal wire:model="show">        
        <x-slot name="title">            
            Nuevo Producto 
        </x-slot>
        <x-slot name="content">
            <x-label for="nombre" :value="__('Nombre')"/>
            <x-input-text wire:model="nombre" id="nombre" placeholder="Nombre del producto" class="bg-stone-300"/>
            <x-label for="descripcion" :value="__('Descripción')"/>
            <textarea wire:model="descripcion" id="descripcion" wire:model="tarea" class="bg-pink-100 rounded-lg p-4 
                border-none resize-none min-h-max w-full" style="min-height: 15rem"></textarea>
            <x-label for="precio" :value="__('Precio')"/>
            <x-input-text wire:model="precio" id="precio" placeholder="Precio del producto" class="bg-stone-300"/>
            <x-validation-errors class="mb-4" />
        </x-slot>
        <x-slot name="footer">
            <input type="submit" value="Guardar" class="bg-blue-500 text-slate-300 hover:cursor-pointer border-gray-300 focus:border-indigo-500 rounded-md shadow-sm p-2">
        </x-slot>
    </x-dialog-modal>
</form>