@props(['job'])
<x-panel>
    <div>
        <x-employer-logo></x-employer-logo>
    </div>

    <div class="flex-1">
        <a href="#" class="self-start text-sm">Laracasts</a>
       
        <h3 class="font-bold text-lg group-hover:text-blue-600 transition-colors duration-100">Video Presenter</h3>

        <p class="text-sm mt-auto">Full Time - From $50,000</p>
    
    </div>
    
 
    <div>
        @foreach ($job->tags as $tag )
        <x-tag :tag="$tag"/>            
        @endforeach        
    </div>
</x-panel>
