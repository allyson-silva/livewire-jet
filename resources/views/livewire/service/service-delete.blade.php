<div>
    <x-dialog-modal wire:model.live="modalServiceDelete">
        <x-slot name="title">
            Form Delete Service
        </x-slot>

        <x-slot name="content">
            <p>Apakah Anda ingin menghapus data dengan ID: {{ $id }} dan name: {{ $name }}?</p>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalServiceDelete', false)" wire:loading.attr="disabled">
                Batal
            </x-secondary-button>

            <x-danger-button @click="$wire.del()" class="ml-3" wire:loading.attr="disabled">
                Delete
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>