<x-layout>
    <x-page-heading>{{ $employer->name }}</x-page-heading>

    <x-forms.form id="updateForm" method="POST" action="{{ route('employer.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH') <!-- Use PATCH method for updating -->
        <x-forms.input label="Name" name="name" value="{{ $employer->name }}" required></x-forms.input>
        
        <x-forms.input label="Logo" name="logo" type="file"></x-forms.input>
        @if($employer->logo)
            <img src="{{ asset('storage/' . $employer->logo) }}" alt="Employer Logo" style="width: 100px;">
        @endif
        
        <x-forms.input label="Email" name="email" type="email" value="{{ $employer->user->email }}" required />
        <x-forms.input label="Password" name="password" type="password" placeholder="Leave blank to keep current password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" placeholder="Leave blank to keep current password" />
        
        <div class="flex justify-end mt-4">
            <x-forms.button class="open-modal" id="updateBtn">Update Details</x-forms.button>
        </div>
    </x-forms.form>

    <x-modal>
        <p>Are you sure you want to update your profile details?</p>
    </x-modal>

    <section class="mt-10">
        <h2 class="font-bold text-2xl mb-4">Your Posted Jobs, {{ $employer->name }}</h2>
        
        <div class="space-y-5">
            @forelse ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @empty
                <p>No jobs posted yet.</p>
            @endforelse
        </div>
    </section>
</x-layout>
