<div>
    <h4 class="card-title mt-2">Plot Details</h4>
    <form wire:submit.prevent='storePlotSale' class="row gy-1 pt-75">
        <div class="col-12 col-md-4">
            <label class="form-label">Sale Price</label>
            <input wire:model.lazy='sale.price' type="number"
                class="form-control @error('sale.price') is-invalid @enderror" placeholder="Some Price">
            @error('sale.price')
                <span class="text-danger"><b>{{ $message }}</b></span>
            @enderror
        </div>
        <div class="col-12 col-md-4">
            <label class="form-label">Discount</label>
            <input wire:model.lazy='sale.discount' type="number"
                class="form-control @error('sale.discount') is-invalid @enderror" placeholder="Some Discount">
            @error('sale.discount')
                <span class="text-danger"><b>{{ $message }}</b></span>
            @enderror
        </div>
        <div class="col-12 col-md-4">
            <label class="form-label">Reference</label>
            <input wire:model.lazy='sale.reference' type="text"
                class="form-control @error('sale.reference') is-invalid @enderror" placeholder="Some Reference">
            @error('sale.reference')
                <span class="text-danger"><b>{{ $message }}</b></span>
            @enderror
        </div>
        <div class="col-12 text-center mt-2 pt-50">
            <button type="submit" class="btn btn-primary me-1">Save Record</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                Discard
            </button>
        </div>
    </form>
</div>
