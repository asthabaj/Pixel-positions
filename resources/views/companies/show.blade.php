<x-layout>
    <x-slot:heading>
        Jobs at {{ $employer->name }}
    </x-slot:heading>
    <section class="space-y-4">
        <div class="mt-6 space-y-5">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </section>
</x-layout>
