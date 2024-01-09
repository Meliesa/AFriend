<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Mental Health Assessment: Add Question Here') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        <div class="p-8">
            <x-form action="{{ route('pages.questions.store') }}">
                <div class="space-y-8">

                    {{-- Back to Index Button --}}
                    <div class="flex justify-end mt-2">
                        <a href="{{ route('pages.questions.index') }}" class="text-black-400">
                            <x-zondicon-close class="w-5 h-5" />
                        </a>
                    </div>

                    <div>
                        <x-form.label for="text" value="{{ __('Question') }}" />
                        <x-form.input id="text" class="block w-full mt-1" type="text" name="text" :value="old('text')" required />
                        <x-form.error for="text" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('ADD') }}
                    </x-buttons.primary>
            </x-form>
        </div>
    </section>
</x-app-layout>