<x-app-layout>
    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            View Assessment Results
        </h2>
    </x-slot>

    <section class="mx-6">
        {{-- Display Results --}}
        <div class="space-y-6">
            <div class="space-y-8">
                @foreach($resultsWithDepressionLevel as $result)
                    <p>User ID: {{ $result['user_id'] }} - Depression Level: {{ $result['depressionLevel'] }}</p>
                @endforeach            
            </div>
        </div>
    </section>

    <section class="mx-6">
        {{-- Display Results --}}
        <div class="space-y-6">
            <div class="space-y-8">
                <canvas id="chart"></canvas>
            </div>
        </div>
    </section>

    <script>
        // Fetch data from PHP and create a chart
        var resultsWithDepressionLevel = {!! json_encode($resultsWithDepressionLevel) !!};
        var ctx = document.getElementById('chart').getContext('2d');
        var chartData = {
            labels: resultsWithDepressionLevel.map(result => 'User ' + result['user_id']),
            datasets: [{
                label: 'Depression Level',
                data: resultsWithDepressionLevel.map(result => result['depressionLevel']),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>

