<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        @forelse($jobs as $job)

            <x-job-card :job="$job"></x-job-card>
            
        @empty 
            <p style="color: #f00;">There are no jobs available at the moment.</p>
        @endforelse
    </div>
</x-layout>