<div wire:ignore.self class="modal fade" id="newPlotType" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:submit.prevent='store' class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">New Plot Type Information</h1>
                </div>
                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                    <div class="col-12 col-md-12">
                        <label class="form-label">Name</label>
                        <input wire:model.lazy='plot.name' type="text"
                            class="form-control @error('plot.name') is-invalid @enderror" placeholder="Some Type Name">
                        @error('plot.name')
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
