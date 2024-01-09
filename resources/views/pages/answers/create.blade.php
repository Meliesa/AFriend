<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Start The Assessment') }}
        </h2>
    </x-slot>
                
    <section class="mx-6">
        {{-- Create --}}
        <div class="space-y-6">
            <x-form method="post" action="{{ route('pages.answers.store') }}">
                <div class="space-y-8">
                    @csrf
                    @foreach($questions as $question)
                    <div style="display: flex; flex-direction: column;">
                        <label for="question_{{ $question->id }}">{{ $question->id }}. {{ $question->text }}</label>
                        
                        <div>
                            <input type="radio" name="answers[{{ $question->id }}]" id="question_{{ $question->id }}_0" value="0">
                            <label for="question_{{ $question->id }}_0">Never</label>
                        </div>
                        
                        <div>
                            <input type="radio" name="answers[{{ $question->id }}]" id="question_{{ $question->id }}_1" value="1">
                            <label for="question_{{ $question->id }}_1">Sometimes</label>
                        </div>
                        
                        <div>
                            <input type="radio" name="answers[{{ $question->id }}]" id="question_{{ $question->id }}_2" value="2">
                            <label for="question_{{ $question->id }}_2">Often</label>
                        </div>
                        
                        <div>
                            <input type="radio" name="answers[{{ $question->id }}]" id="question_{{ $question->id }}_3" value="3">
                            <label for="question_{{ $question->id }}_3">Almost Always</label>
                        </div>
                    </div>
                    <br>
                    @endforeach
                
                


                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('Submit') }}
                    </x-buttons.primary>
                </div>
            </x-form>
        </div>
    </section>

</x-app-layout>
