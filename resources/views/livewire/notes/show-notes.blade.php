<?php

use Livewire\Volt\Component;

new class extends Component {

    public function with() {
        return [
            'notes' => \App\Models\Note::query()
                ->orderBy('sent_date', 'desc')
                ->get()
        ];
    }
}; ?>

<div>
    <div class="space-y-2">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-11">
        @forelse($notes as $note)
            <x-card wire:key="{{ $note->id }}" title="{{ $note->title }}" rounded="3xl">
                <div class="flex justify-between">
                {{ $note->body }}
                </div>
                <x-slot name="footer" class="flex items-center justify-between">
                    <x-button outline negative label="Delete" />

                    <x-button label="Save" primary />
                </x-slot>
            </x-card>
        @empty
            <p class="text-gray-900 dark:text-gray-100">
                No notes found.
            </p>
        @endforelse
        </div>
    </div>
</div>
