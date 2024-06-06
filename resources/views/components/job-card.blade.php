@props(['job'])
<x-panel class="flex flex-col">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-600 text-lg font-bold transition-colors duration-100">Video Presenter</h3>
        <p class="text-sm">Full Time - From $50,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach   
        </div>
        <x-employer-logo :width="42"></x-employer-logo>
    </div> 
</x-panel>
