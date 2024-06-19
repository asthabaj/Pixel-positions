<x-layout>
    @if($searchType == 'job')
        <x-page-heading>Results For '{{ $query }}'</x-page-heading>
    @elseif($searchType == 'tag')
        <x-page-heading>Jobs Tagged With '{{ $query }}'</x-page-heading>
    @endif

    <section class="text-center mt-6 mb-10">
        <x-forms.form action="{{ route('jobs.search') }}" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
        </x-forms.form>
    </section>

    <div class="space-y-5">
        @foreach ($jobs as $job)
            <x-job-card :job="$job" />
        @endforeach
    </div>
</x-layout>
