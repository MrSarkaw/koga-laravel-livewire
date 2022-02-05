<div x-data="{ show:false }">
    <button x-on:click=" show=true "><i class="fas fa-trash"></i></button>
    <div x-show="show" class="inline">
        <button class="px-4 text-white bg-red-500 rounded-lg" wire:click='deleteuser'>yes!</button>
        <button class="px-4 text-black bg-white rounded-lg" x-on:click=" show=false ">no</button>
    </div>
</div>
