<x-layout>

    <ul>
        @forelse($jobs as $job)
            <li><a href="{{ route('jobs.show', $job->id)}}">{{ $job->title }}</a> - {{ Str::limit($job->description, 60)}}</li>
        @empty 
            <li style="color: #f00;">There are no jobs available at the moment.</li>
        @endforelse
    </ul>
</x-layout>