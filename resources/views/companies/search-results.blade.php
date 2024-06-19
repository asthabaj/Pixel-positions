<x-layout>
    <x-page-heading>Search Results</x-page-heading>
   <section>
        <h1 class="font-bold text-3xl">Search Results for "{{ $query }}"</h1>
    </section>

    <section class="text-center mt-6 mb-10">
        <x-forms.form action="{{ route('companies.search') }}" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="test.." />
        </x-forms.form>
    </section>

    <section class="space-y-4">
        @if($employers->isEmpty())
            <p>No companies found.</p>
        @else
            @foreach ($employers as $employer)
                <x-companies :employer="$employer" />
            @endforeach  
        @endif
    </section>
</x-layout>
