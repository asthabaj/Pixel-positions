@props(['job'])

<x-panel class="flex flex-col">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8 flex-grow"> <!-- Use flex-grow to make this div take remaining space -->
        <h3 class="group-hover:text-blue-600 text-lg font-bold transition-colors duration-100">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-base">{{$job->salary}}</p>
        <p class="text-sm">{{$job->schedule}}</p>
        <p class="text-sm">{{$job->location}}</p>
        
        <div class="mt-auto flex flex-wrap gap-2">
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>
    </div>
    <div class="flex justify-between items-center"> 
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div> 
</x-panel>
