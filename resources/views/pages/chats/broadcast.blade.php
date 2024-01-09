

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Contact Your Preferred Counselor') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="left message">
            <p>{{$message}}</p>
            <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="Avatar">
        </div>
    </section>