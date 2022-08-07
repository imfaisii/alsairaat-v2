<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form wire:submit.prevent="login">
        <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input wire:model.lazy="user.email" type="text"
                class="form-control @error('user.email') is-invalid @enderror" placeholder="john@example.com"
                aria-describedby="login-email" tabindex="1" autofocus />
            @error('user.email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">Password</label>
                <a href="#">
                    <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input wire:model.lazy="user.password" type="password"
                    class="form-control form-control-merge @error('user.password') is-invalid @enderror" tabindex="2"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="login-password" />
                <span wire:ignore class="input-group-text cursor-pointer">
                    <i data-feather="eye"></i>
                </span>
            </div>
            @error('user.password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
        </div>
        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary w-100">Sign In
            <div wire:loading wire:target="login">
                <span class="spinner-border spinner-border-sm btn-spinner ml-2 mr-2" role="status" aria-hidden="true">
                </span>
            </div>
        </button>
    </form>
</div>
