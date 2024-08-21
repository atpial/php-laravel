<x-layout>
    <x:slot:heading>
        Job Listing
    </x:slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li> <strong class= "text-blue-500 hover:underline">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} </li>
            </a>
        @endforeach
    </ul>
</x-layout>

