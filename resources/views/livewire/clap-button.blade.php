<div>
    <button wire:click="toggleClap" class="px-4 py-2 bg-gray-100 text-white rounded flex items-center space-x-2">
        <i class="text-3xl {{ $hasClapped ? 'fa-solid fa-heart text-red-500' : 'fa-regular fa-heart' }}"></i>
        <span>({{ $clapCount }})</span>
    </button>
</div>
