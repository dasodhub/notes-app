<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if(count($notes) > 0)
                    @foreach($notes as $note)
                        <div class="p-6 text-gray-900">
                            {{ $note->title }}
                        </div>
                    @endforeach
                @else
                    <div class="p-6 text-gray-900">
                        {{ __("You don't have any notes yet.") }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
