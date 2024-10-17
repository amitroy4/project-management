<section class="card shadow-sm p-4 rounded">
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div class="d-flex justify-content-start">
        <button class="btn btn-danger mt-3"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
            {{ __('Delete Account') }}
        </button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-2 text-muted">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mb-3">
                <label for="password" class="form-label sr-only">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                @if ($errors->userDeletion->has('password'))
                    <div class="text-danger mt-1">
                        {{ $errors->userDeletion->first('password') }}
                    </div>
                @endif
            </div>

            <div class="d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-secondary me-2" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </button>
                <button type="submit" class="btn btn-danger">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
