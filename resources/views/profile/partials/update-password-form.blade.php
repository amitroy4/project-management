<section class="card shadow-sm p-4 rounded">
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                @if ($errors->updatePassword->has('current_password'))
                    <div class="text-danger mt-1">
                        {{ $errors->updatePassword->first('current_password') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                @if ($errors->updatePassword->has('password'))
                    <div class="text-danger mt-1">
                        {{ $errors->updatePassword->first('password') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                @if ($errors->updatePassword->has('password_confirmation'))
                    <div class="text-danger mt-1">
                        {{ $errors->updatePassword->first('password_confirmation') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-muted m-0">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
