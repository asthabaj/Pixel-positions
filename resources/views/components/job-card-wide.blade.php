@props(['job'])

<x-panel>
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1">
        <a href="#" class="self-start text-sm">{{$job->employer->name}}</a>
       
        <h3 class="font-bold text-lg group-hover:text-blue-600 transition-colors duration-100">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm mt-auto">{{$job->salary}}</p>

        <p class="text-sm mt-auto">{{$job->schedule}}</p>

        <p class="text-sm mt-auto">{{$job->location}}</p>

    
    </div>
    
    <div>
        @foreach ($job->tags as $tag )
        <x-tag :tag="$tag"/>            
        @endforeach        
    </div>

    <div class="flex justify-end mt-4 space-x-2">
        {{ $slot }}
    </div>
</x-panel>
