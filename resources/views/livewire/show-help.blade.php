<div>
{{--    <button wire:click="toggleHelp" class="px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">--}}
{{--    <button wire:click="$set('showHelp', 'true')" class="px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">--}}
    <button wire:click="$toggle('showHelp')" class="px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
        {{ __('Toggle help') }}
    </button>

    @if($showHelp)
        <div class="bg-green-100 text-green-800 px-4 py-2 mt-4">
            {{ __('It helps millions of people discover, explore, and buy your products. It brings you different ways to get the right products to the right customers.') }}
        </div>
    @endif
</div>
