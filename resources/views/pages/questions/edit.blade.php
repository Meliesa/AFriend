<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Mental Health Assessment: Update Question Here') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        <div class="p-8">
            <x-form method="post" action="{{ route('pages.questions.update', $question->id) }}">
                @csrf
                @method('PUT')

                <div class="space-y-8">
                    
                    <div>
                        <x-form.label for="text" value="{{ __('Question') }}" />
                        <x-form.input id="text" class="block w-full mt-1" type="text" name="text" :value="$question->text" required />
                        <x-form.error for="text" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('Update') }}
                    </x-buttons.primary>
            </x-form>
        </div>
    </section>
</x-app-layout>