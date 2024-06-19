<x-layout>
    <x-page-heading> Companies </x-page-heading>
    <div class="space-y-10">
        <section>
            <h1 class="font-bold text-3xl">Search for a Company</h1>
            <x-forms.form action="{{ route('companies.search') }}" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="test..." />
            </x-forms.form>
        </section>
    <section class="space-y-4">
        @foreach ($employers as $employer)
            <x-companies :employer="$employer" />
        @endforeach  
    </section>
</x-layout>
