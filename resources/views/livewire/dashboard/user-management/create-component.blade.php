<div wire:ignore.self class="modal fade text-start" id="newUser" tabindex="-1" aria-labelledby="myModalLabel17"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form wire:submit.prevent='store' class="form form-vertical">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New User Form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-1">
                                <label class="form-label">Name</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model.lazy='user.name' type="text"
                                        class="form-control @error('user.name') is-invalid @enderror"
                                        placeholder="John Doe">
                                </div>
                                @error('user.name')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <label class="form-label">Email</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model.lazy='user.email' type="email"
                                        class="form-control @error('user.email') is-invalid @enderror"
                                        placeholder="john@gmail.com">
                                </div>
                                @error('user.email')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <label class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input wire:model.lazy='user.password' type="password"
                                        class="form-control @error('user.password') is-invalid @enderror"
                                        placeholder="Password">
                                </div>
                                @error('user.password')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1">
                                <label class="form-label">User Type</label>
                                <select wire:model.lazy='user.role'
                                    class="form-select @error('user.role') is-invalid @enderror">
                                    <option value="">Select Role</option>
                                    <option value="super-admin">Super Admin</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('user.role')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary waves-effect"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
