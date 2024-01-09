<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Your Personal Journal') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                <thead class="bg-blue-500">
                    <tr>
                        <x-table.head>Date</x-table.head>
                        <x-table.head>Title</x-table.head>
                        <x-table.head>Mood</x-table.head>
                        <x-table.head>Content</x-table.head>
                        <x-table.head class="text-center">Actions</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    @foreach ($journals as $journal)
                    <tr>
                        <x-table.data>
                            <div>
                                <a href="{{ route('pages.journals.show', $journal->id) }}">
                                    {{ $journal->created_at->format('d-m-Y') }}
                                </a>
                            </div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $journal->title }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $journal->mood }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $journal->content }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="flex justify-center space-x-4">

                                <a href="{{ route('pages.journals.edit', $journal->id) }}" class="text-yellow-400">
                                    <x-zondicon-edit-pencil class="w-5 h-5" />
                                </a>

                                <x-form action="{{ route('pages.journals.destroy', $journal->id) }}" method="DELETE">
                                    <button type="submit" class="text-red-400">
                                        <x-zondicon-trash class="w-5 h-5" />
                                    </button>
                                </x-form>

                            </div>
                        </x-table.data>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </section>


</x-app-layout>