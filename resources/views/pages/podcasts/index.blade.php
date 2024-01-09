<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Listen To Podcast Whenever You Need') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                @foreach ($podcasts as $podcast)
                    <div class="container">
                        <h1><b>{{ $podcast->title }}</b></h1>
                        <p>{{ $podcast->description }}</p>
                        <br>
                        <iframe style="border-radius: 5px" src="{{ $podcast->spotify_url }}" width="100%" height="320" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" justify-content="center" align-items="center" loading="lazy"></iframe>
                    </div>
                @endforeach
            </table>
        </div>
    </section>


</x-app-layout>