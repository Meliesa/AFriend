<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Counsellor: Create') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        <div class="p-8">
            <x-form action="{{ route('admin.counsellors.store') }}">
                <div class="space-y-8">
                    {{-- Name --}}
                    <div>
                        <x-form.label for="name" value="{{ __('Name') }}" />
                        <x-form.input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
                        <x-form.error for="name" />
                    </div>

                    <div>
                        <x-form.label for="email" value="{{ __('Email') }}" />
                        <x-form.input id="email" class="block w-full mt-1" type="text" name="email" :value="old('email')" required />
                        <x-form.error for="email" />
                    </div>

                    <div>
                        <x-form.label for="phone" value="{{ __('Phone') }}" />
                        <x-form.input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required />
                        <x-form.error for="phone" />
                    </div>

                    <div>
                        <x-form.label for="password" value="{{ __('Password') }}" />
                        <x-form.input id="password" class="block w-full mt-1" type="text" name="password" :value="old('password')" required />
                        <x-form.error for="password" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('Create') }}
                    </x-buttons.primary>
            </x-form>
        </div>
    </section>
</x-app-layout>
