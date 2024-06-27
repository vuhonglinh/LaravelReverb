<div>
    {{-- The best athlete wants his opponent at his best. --}}

    @foreach ($convo as $convoItem)
        <div>
            {{ $convoItem['username'] }}: {{ $convoItem['message'] }}
        </div>
    @endforeach

    <form wire:submit="submitMessage">
        <x-text-input wire:model="message" wire:key="{{ now() }}" />
        <button type="submit">send</button>
    </form>
</div>
