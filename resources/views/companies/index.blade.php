<x-layout>
    <x-page-heading> Companies </x-page-heading>
    <div class="space-y-10">
        <section>
            <h1 class="font-bold text-3xl">Search for a Company</h1>
            <x-forms.form action="/search" class="mt-6 ">
                <x-forms.input :label="false" name="q" placeholder="test..." />
            </x-forms.form>
        </section>
    <section class="space-y-4">
        @foreach ($employers as $employer)
            <x-panel class="mt-6 space-y-5">
                <div class="flex items-center space-x-4">
                    <x-employer-logo :employer="$employer" />
                    <div class="flex-1">
                        <a href="{{ route('companies.show', $employer->id) }}" class="self-start text-sm">{{ $employer->name }}</a>
                    </div>
                </div>
            </x-panel>
        @endforeach  
    </section>
</x-layout>
