<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Podcast: Create') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        <div class="p-8">
            <x-form action="{{ route('admin.podcasts.store') }}">
                <div class="space-y-8">
                    {{-- Name --}}
                    <div>
                        <x-form.label for="title" value="{{ __('Title') }}" />
                        <x-form.input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" required />
                        <x-form.error for="title" />
                    </div>

                    <div>
                        <x-form.label for="description" value="{{ __('Description') }}" />
                        <x-form.input id="description" class="block w-full mt-1" type="text" name="description" :value="old('description')" required />
                        <x-form.error for="description" />
                    </div>

                    <div>
                        <x-form.label for="spotify_url" value="{{ __('Spotify URl') }}" />
                        <x-form.input id="spotify_url" class="block w-full mt-1" type="text" name="spotify_url" :value="old('spotify_url')" required />
                        <x-form.error for="spotify_url" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('ADD') }}
                    </x-buttons.primary>
            </x-form>
        </div>
    </section>
</x-app-layout>