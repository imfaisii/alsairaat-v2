<div wire:ignore.self class="modal fade" id="newPlot" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">New Plot Information</h1>
                </div>
                <form wire:submit.prevent='store' class="row gy-1 pt-75">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Society</label>
                        <select wire:model.lazy='plot.society_id'
                            class="form-control @error('plot.society_id') is-invalid @enderror">
                            <option value="">Select a society</option>
                            @forelse ($societes as $society)
                                <option value="{{ $society->id }}">{{ $society->name }}</option>
                            @empty
                                <option value="">No society found.</option>
                            @endforelse
                        </select>
                        @error('plot.society_id')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Plot Type</label>
                        <select wire:model.lazy='plot.plot_type_id'
                            class="form-control @error('plot.plot_type_id') is-invalid @enderror">
                            <option value="">Select a Plot Type</option>
                            @forelse ($plotTypes as $plotType)
                                <option value="{{ $plotType->id }}">{{ $plotType->name }}</option>
                            @empty
                                <option value="">No plot type found.</option>
                            @endforelse
                        </select>
                        @error('plot.plot_type_id')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Number</label>
                        <input wire:model.lazy='plot.number' type="number"
                            class="form-control @error('plot.number') is-invalid @enderror" placeholder="Some Number">
                        @error('plot.number')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Size</label>
                        <input wire:model.lazy='plot.size' type="text"
                            class="form-control @error('plot.size') is-invalid @enderror" placeholder="Some Size">
                        @error('plot.size')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label">Street</label>
                        <textarea rows="5" wire:model.lazy='plot.street' type="text"
                            class="form-control @error('plot.street') is-invalid @enderror" placeholder="Some Street"></textarea>
                        @error('plot.street')
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
