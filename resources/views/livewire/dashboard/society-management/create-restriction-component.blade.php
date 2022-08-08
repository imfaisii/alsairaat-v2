<div wire:ignore.self class="modal fade" id="newSocietyRestriction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Allocate Society to User</h1>
                </div>
                <form wire:submit.prevent='store' class="row gy-1 pt-75">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Select Society</label>
                        <select wire:model.lazy='allocation.society_id' type="text"
                            class="form-control @error('allocation.society_id') is-invalid @enderror">
                            <option value="">Select a society</option>
                            @forelse ($societies as $society)
                                <option value="{{ $society->id }}">{{ $society->name }}</option>
                            @empty
                                <option value="">No society found.</option>
                            @endforelse
                        </select>
                        @error('allocation.society_id')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Select User</label>
                        <select wire:model.lazy='allocation.user_id' type="text"
                            class="form-control @error('allocation.user_id') is-invalid @enderror">
                            <option value="">Select a user</option>
                            @forelse ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @empty
                                <option value="">No user found.</option>
                            @endforelse
                        </select>
                        @error('allocation.user_id')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
