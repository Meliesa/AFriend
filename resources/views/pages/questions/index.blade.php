<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Mental Health Assessment (Stress Assessment)') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            
            <table class="min-w-full">
                <h3><b>The Calculation For Stress Assessment</b></h3>
                <thead class="bg-gray-500">
                    <tr>
                        <x-table.head>Total Score</x-table.head>
                        <x-table.head>Stress Severity</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    <tr>
                        <x-table.data>
                            <div>0-7</div>
                        </x-table.data>
                        <x-table.data>
                            <div>Normal Stress</div>
                        </x-table.data>
                    </tr>
                    <tr>
                        <x-table.data>
                            <div>8-9</div>
                        </x-table.data>
                        <x-table.data>
                            <div>Mild Stress</div>
                        </x-table.data>
                    </tr>
                    <tr>
                        <x-table.data>
                            <div>10-12</div>
                        </x-table.data>
                        <x-table.data>
                            <div>Moderate Stress</div>
                        </x-table.data>
                    </tr>
                    <tr>
                        <x-table.data>
                            <div>13-16</div>
                        </x-table.data>
                        <x-table.data>
                            <div>Severe Stress</div>
                        </x-table.data>
                    </tr>
                    <tr>
                        <x-table.data>
                            <div>17+</div>
                        </x-table.data>
                        <x-table.data>
                            <div>Extremely Severe Stress</div>
                        </x-table.data>
                    </tr>
                </tbody>

            </table>
            <br>
            <table class="min-w-full">
                <h3><b>The Questions For Stress Assessment</b></h3>
                <thead class="bg-blue-500">
                    <tr>
                        <x-table.head>No</x-table.head>
                        <x-table.head>Question</x-table.head>
                        <x-table.head class="text-center">Actions</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    @foreach ($questions as $question)
                    <tr>
                        <x-table.data>
                            <div>{{ $question->id }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $question->text }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="flex justify-center space-x-4">

                                <a href="{{ route('pages.questions.edit', $question->id) }}" class="text-yellow-400">
                                    <x-zondicon-edit-pencil class="w-5 h-5" />
                                </a>

                                <x-form action="{{ route('pages.questions.destroy', $question->id) }}" method="DELETE">
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
