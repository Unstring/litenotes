<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

            {{-- @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach --}}

            <form action="{{ route('notes.store') }}" method="post">
            @csrf
            <x-text-input type="text" :value="@old('title')" class="w-full my-3" name="title" autocomplete="off" placeholder="Title"></x-text-input>
            @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
            <x-textarea name="text" class="w-full my-3" rows="10" placeholder="Start typing here... "></x-textarea>
            @error('text')
                <p class="text-red-600">{{$message}}</p>
            @enderror
            <x-primary-button>
                {{-- {{ __('save note') }} --}}
                save note
            </x-primary-button>
            {{-- <button type="submit">save</button> --}}
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
