<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Your Journal on {{ $journal->created_at->format('d-m-Y') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        {{-- Display Journal Entry --}}
        <div class="space-y-6">
            <div class="space-y-8">

                {{-- Back to Index Button --}}
                <div class="flex justify-end mt-2">
                    <a href="{{ route('pages.journals.index') }}" class="text-yellow-400">
                        <x-zondicon-close class="w-5 h-5" />
                    </a>
                </div>

                {{-- Title --}}
                <div>
                    <p><strong>Title:</strong> {{ $journal->title }}</p>
                </div>

                {{-- Mood --}}
                <div>
                    <p><strong>Mood:</strong> {{ $journal->mood }}</p>
                </div>

                {{-- Content --}}
                <div>
                    <p><strong>Content:</strong> {{ $journal->content }}</p>
                </div>
            </div>
        </div>

    </section>
</x-app-layout>
