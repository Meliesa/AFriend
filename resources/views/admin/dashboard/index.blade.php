<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-indigo-100 shadow-xl sm:rounded-lg">
                <br>
                <h3 class="text-2xl font-semibold mb-4 text-gray-800">
                    Welcome, Admin!
                </h3>
                <p class="text-gray-600">
                    We're excited to introduce the "A Friend" system, a powerful tool that allows you to efficiently monitor users' postings and manage counselor and podcast information. With this system, you have greater control over the platform's content and can ensure a positive and secure user experience.
                </p>
                <p class="mt-4 text-gray-600">
                    If you have any questions or need assistance, feel free to reach out. Happy administering!
                </p>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
