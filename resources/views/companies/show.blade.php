<x-layout>
    <x-page-heading>
        Jobs at {{ $employer->name }}
    </x-page-heading>
    <section class="space-y-4">
        <div class="mt-6 space-y-5">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </section>
</x-layout>
