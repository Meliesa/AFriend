<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Your Pesornal Journal: Edit') }}
        </h2>
    </x-slot>
                <section class="mx-6">
                    {{-- Create --}}
                    <div class="space-y-6">
                        <x-form method="post" action="{{ route('pages.journals.update', $journal->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="space-y-8">

                                {{-- Title --}}
                                <div>
                                    <x-form.label for="title" value="{{ __('Title') }}" />
                                    <x-form.input id="title" class="block w-full mt-1" type="text" name="title" :value="$journal->title" autofocus />
                                    <x-form.error for="title" />
                                </div>

                                {{-- Mood --}}
                                <div>
                                    <x-form.label for="mood" value="{{ __('Mood of The Day') }}" />
                                    <x-form.input id="mood" class="block w-full mt-1" type="text" name="mood" :value="$journal->mood" autofocus />
                                    <x-form.error for="mood" />
                                </div>

                                {{-- Content --}}
                                <div>
                                    <x-form.label for="content" value="{{ __('Content') }}" />
                                    <x-form.input id="content" class="block w-full mt-1" type="text" name="content" :value="$journal->content" autofocus />
                                    <x-form.error for="content" />
                                </div>

                                {{-- Button --}}
                                <x-buttons.primary>
                                    {{ __('Update') }}
                                </x-buttons.primary>
                        </x-form>
                    </div>
                </section>
</x-app-layout>