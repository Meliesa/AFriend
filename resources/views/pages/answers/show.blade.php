<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Your Assessment Result
        </h2>
    </x-slot>

    <section class="mx-6">
        {{-- Display Journal Entry --}}
        <div class="space-y-6">
            <div class="space-y-8">
                @if(isset($depressionLevel))
                    <h1><b>Your Stress Level:</b> {{ $depressionLevel }}</h1>
                    <br>
                    <p>This quick stress assessment is a valuable self-report questionnaire designed to assess an individual's levels of stress.
                        However, it's important to note that while this assessment can provide useful insights, it is not 100% accurate, and its results should be interpreted
                        cautiously. If you find yourself in need of additional support or have concerns about your mental health, it is highly recommended to reach out to a
                        professional mental health team or healthcare provider. They can offer a more comprehensive assessment, personalized advice, and tailored assistance
                        based on your specific situation. Remember that seeking professional help is a crucial step in addressing mental health concerns and ensuring the most
                        appropriate support is provided.
                    </p>
                    <br>
                    <p>
                        If in crisis, contact emergency services or a local crisis hotline immediately.Community mental health services, such as the Malaysian Mental Health
                        Association (MMHA) or Befrienders Malaysia, offer support and counseling. Befrienders Malaysia operates a 24/7 hotline at 03-7956 8145, providing a
                        listening ear and emotional support.
                    </p>
                    <p>
                        Don't feel left out, we are here for you. Love, A Friend.
                    </p>
                @endif

            </div>
        </div>

    </section>
</x-app-layout>
