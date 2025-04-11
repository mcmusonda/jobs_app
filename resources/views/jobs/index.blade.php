<x-layout>
    <h1>{{ $title }}</h1>

    <ul>
        @forelse($jobs as $job)
            <li>{{ $job['job_title'] }}</li>
            <li>{{ Str::limit($job['description'], 40)}}</li>
        @empty 
            <li style="color: #f00;">There are no jobs available at the moment.</li>
        @endforelse
    </ul>
</x-layout>