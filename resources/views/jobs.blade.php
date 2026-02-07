<x-layout>
    <x-slot:heading>Job listing below</x-slot:heading>
    <x-slot:main>
    <div class="space-y-4">
        @foreach ($jobs as $job )
                <a href="/job/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
                </a>

        @endforeach
    </div>
</x-slot:main>
</x-layout>