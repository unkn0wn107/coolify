<div>
    <h2>Danger Zone</h2>
    <div class="">Woah. I hope you know what are you doing.</div>
    <h4 class="pt-4">Delete Resource</h4>
    <div class="pb-4">This will stop your containers, delete all related data, etc. Beware! There is no coming back!
    </div>
    <x-modal-confirmation title="Confirm Resource Deletion?" buttonTitle="Delete" isErrorButton submitAction="delete"
        buttonTitle="Delete" :checkboxes="$checkboxes" :actions="['All containers of this resource will be stopped and permanently deleted.']" confirmationText="{{ $resourceName }}"
        confirmationLabel="Please confirm the execution of the actions by entering the NAME of the resource below"
        shortConfirmationLabel="Resource Name" step3ButtonText="Delete Permanently" />
</div>
