@props(['employer'])
<x-panel class="mt-6 space-y-5">
    <div class="flex items-center space-x-4">
        <x-employer-logo :employer="$employer" />
        <div class="flex-1">
            <a href="{{ route('companies.show', $employer->id) }}" class="self-start text-sm">{{ $employer->name }}</a>
        </div>
    </div>
</x-panel>