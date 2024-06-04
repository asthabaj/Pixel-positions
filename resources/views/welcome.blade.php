<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-3">
            <h1 class="font-bold text-4xl">Let's find your next job</h1>

            <form action="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white border-white/10 px-5 py-4 w-full mt-5">

            </form>
        </section>
        <section>
            <x-section-heading>Feature Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-9 mt-9">
                <x-job-card>
                </x-job-card>
                <x-job-card>
                </x-job-card>
                <x-job-card>
                </x-job-card>
            </div>
        </section>
    
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2" >
                <x-tag>Tag</x-tag> 
                <x-tag>Tag</x-tag> 
                <x-tag>Tag</x-tag> 
                <x-tag>Tag</x-tag> 
                <x-tag>Tag</x-tag> 
                <x-tag>Tag</x-tag> 
            </div>
        </section>
    
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-5">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>            
        </section>
    </div>
</x-layout>