<x-layout>
    <h1 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Welcome to Workopia - Home IT Gigs</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        @forelse($jobs as $job)

            <x-job-card :job="$job"></x-job-card>
            
        @empty 
            <p style="color: #f00;">There are no jobs available at the moment.</p>
        @endforelse
    </div>
    <a href="{{route('jobs.index')}}" class="block text-xl text-center">
        <i class="fa fa-arrow-alt-cicle-right"></i> Show All Jobs
    </a>
    <x-bottom-banner></x-bottom-banner>

</x-layout>