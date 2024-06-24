<x-layout>
    <x-page-heading>
        Edit Job
    </x-page-heading>

    <x-forms.form method="POST" action="{{ route('jobs.update', $job->id) }}">
        @csrf
        @method('PATCH')

        <x-forms.input label="Title" name="title" value="{{ $job->title }}" placeholder="Enter job title" />
        <x-forms.input label="Salary" name="salary" value="{{ $job->salary }}" placeholder="Enter salary" />
        <x-forms.input label="Location" name="location" value="{{ $job->location }}" placeholder="Enter location" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time" {{ $job->schedule == 'Part Time' ? 'selected' : '' }}>Part Time</option>
            <option value="Full Time" {{ $job->schedule == 'Full Time' ? 'selected' : '' }}>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" value="{{ $job->url }}" placeholder="Enter URL" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" {{ $job->featured ? 'checked' : '' }} />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" value="{{ implode(',', $job->tags->pluck('name')->toArray()) }}" />

        <x-forms.button>Update</x-forms.button>
    </x-forms.form>
</x-layout>
