<x-layout>
    @if($searchType == 'job')
        <x-page-heading>Results For '{{ $query }}'</x-page-heading>
    @elseif($searchType == 'tag')
        <x-page-heading>Jobs Tagged With '{{ $query }}'</x-page-heading>
    @endif

    <div class="space-y-5">
        @foreach ($jobs as $job)
            <div>
                @if($job->employer)
                    <x-employer-logo :employer="$job->employer"></x-employer-logo>
                @endif
            </div>

            <div class="flex-1">
                @if($job->employer)
                    <a href="#" class="self-start text-sm">{{ $job->employer->name }}</a>
                @else
                    <span class="self-start text-sm">Unknown Employer</span>
                @endif
                
                <h3 class="font-bold text-lg group-hover:text-blue-600 transition-colors duration-100">{{ $job->title }}</h3>

                <p class="text-sm mt-auto">{{ $job->salary }}</p>
            </div>

            <div>
                @foreach ($job->tags as $tag)
                    <x-tag :tag="$tag"/>  
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>
