<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Counsellors') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                <thead class="bg-blue-500">
                    <tr>
                        <x-table.head>Name</x-table.head>
                        <x-table.head>Email</x-table.head>
                        <x-table.head>Phone</x-table.head>
                        <x-table.head>Password</x-table.head>
                        <x-table.head class="text-center">Actions</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    @foreach ($counsellors as $counsellor)
                    <tr>
                        <x-table.data>
                            <div>{{ $counsellor->name }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $counsellor->email }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $counsellor->phone }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $counsellor->password }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="flex justify-center space-x-4">

                                <a href="{{ route('admin.counsellors.edit', $counsellor) }}" class="text-yellow-400">
                                    <x-zondicon-edit-pencil class="w-5 h-5" />
                                </a>

                                <x-form action="{{ route('admin.counsellors.destroy', $counsellor) }}" method="DELETE">
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
