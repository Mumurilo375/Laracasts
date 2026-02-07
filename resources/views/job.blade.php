<x-layout>
    <x-slot:heading>Job below</x-slot:heading>
    <x-slot:main></x-slot:main>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        this job pays {{ $job['salary'] }} per year
    </p>

</x-layout>