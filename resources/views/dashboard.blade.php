<x-app-layout> 
    <header class="font-sans m-5">
        <h1 class="text-3xl font-bold">Lista de productos</h1>
    </header>
    
    {{-- Filtros --}}
    <livewire:filtrar-productos />
    
    {{-- Modal --}}
    <livewire:agregar-producto />    

    {{-- Lista de productos --}}
    <livewire:mostrar-productos />
</x-app-layout>

