<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("All notes") }}
                </div>
            </div> --}}
            <a href="{{route('notes.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">+ new note</a>
            @forelse ($notes as $note)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        {{$note->title}}
                    </h2>
                    <p class="mt-2">
                        {{ Str::limit($note->text, 200) }}
                        
                    </p>
                    <span class="block mt-4 text-sm opacity-70">{{$note->updated_at->diffForHumans()}}</span>
                    </div>
                    @empty
                    <p>You have no notes yet</p>
            @endforelse
            {{$notes->links()}}
        </div>
    </div>
</x-app-layout>
