<div>
    <div><span class="text-gray-500">{{ __('Title: ') }}</span>{{ $todo->title }}</div>
    <div><span class="text-gray-500">{{ __('Body: ') }}</span>{{ $todo->body }}</div>
    <div><span class="text-gray-500">{{ __('Due at: ') }}</span>{{ $todo->due_at }}</div>
    <button wire:click="$parent.deselect()" class="mt-2 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
        {{ __('Deselect') }}
    </button>
</div>
