<div {{ $attributes->merge(['class' => 'modal hidden fixed inset-0 z-50 pointer-events-auto']) }}>
    <div class="modal-content bg-black p-4 border border-black">
        {{$slot}}
        <div class="flex justify-end mt-4">
            <x-forms.button type="button" class="confirm-update">Yes, Update</x-forms.button>
            <x-forms.button type="button" class="close-modal">No</x-forms.button>
        </div>    
    </div>
</div>
<div class="modal-backdrop hidden fixed inset-0 bg-black opacity-50 z-40"></div>

<script>
 document.addEventListener('DOMContentLoaded', () => {
    const btnOpenModal = document.querySelector('.open-modal');
    const btnCloseModal = document.querySelector('.close-modal');
    const btnConfirmUpdate = document.querySelector('.confirm-update');
    const modal = document.querySelector('.modal');
    const backdrop = document.querySelector('.modal-backdrop');
    const body = document.querySelector('body');
    const form = document.querySelector('#updateForm');

    const openModal = function (e) {
        e.preventDefault();
        modal.classList.remove('hidden');
        backdrop.classList.remove('hidden');
        body.classList.add('pointer-events-none');
        modal.classList.add('pointer-events-auto');
    };

    const closeModal = function (e) {
        e.preventDefault();
        modal.classList.add('hidden');
        backdrop.classList.add('hidden');
        body.classList.remove('pointer-events-none');
        modal.classList.remove('pointer-events-auto');
    };

    const confirmUpdate = function (e) {
        e.preventDefault();
        form.submit();
    };

    btnOpenModal.addEventListener('click', openModal);
    btnCloseModal.addEventListener('click', closeModal);
    btnConfirmUpdate.addEventListener('click', confirmUpdate);
});
</script>
