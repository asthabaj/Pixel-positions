<x-layout>
    <x-page-heading>
        Post a new Job
    </x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$10,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Sanepa, Lalitpur"/>

        <x-forms.select label="Schedule" name="schedule" class="text-black ">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="http://example.com/battle/bit.aspx"/>

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>
        
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="video, education, frontend"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
