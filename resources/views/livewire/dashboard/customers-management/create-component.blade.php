<div wire:ignore.self class="modal fade" id="newCustomer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-2 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Plot Sale Information</h1>
                </div>
                <!-- Centered Aligned Tabs starts -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card-body">
                        <div class="col-12 col-md-12">
                            <div class="mb-1">
                                <label class="mb-1" for="">Select Type</label>
                                <select wire:model.lazy='isSelected' class="form-control">
                                    <option value="">Select entry type</option>
                                    <option value="existing">Existing customer</option>
                                    <option value="new">New customer</option>
                                </select>
                            </div>
                        </div>
                        <div wire:loading wire:target='storeNewCustomer' class="text-center">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        @if ($isSelected)
                            <section id="multiple-column-form" wire:loading.remove wire:target='storeNewCustomer'>
                                <div class="row">
                                    <div class="col-12">
                                        @if ($isNew)
                                            <form wire:submit.prevent='storeNewCustomer' class="row gy-1 pt-75">
                                                <div class="col-12 col-md-4">
                                                    <label class="form-label">Customer Name</label>
                                                    <input wire:model.lazy='customer.name' type="text"
                                                        class="form-control @error('customer.name') is-invalid @enderror"
                                                        placeholder="Some Name">
                                                    @error('customer.name')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label class="form-label">Customer Father's Name</label>
                                                    <input wire:model.lazy='customer.father_name' type="text"
                                                        class="form-control @error('customer.father_name') is-invalid @enderror"
                                                        placeholder="Some Name">
                                                    @error('customer.father_name')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label class="form-label">Customer Husband Name</label>
                                                    <input wire:model.lazy='customer.husband_name' type="text"
                                                        class="form-control @error('customer.husband_name') is-invalid @enderror"
                                                        placeholder="Some Name">
                                                    @error('customer.husband_name')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer CNIC#</label>
                                                    <input wire:model.lazy='customer.cnic' type="text"
                                                        class="form-control @error('customer.cnic') is-invalid @enderror"
                                                        placeholder="3XXXX-XXXXXXX-X">
                                                    @error('customer.cnic')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer Mobile Number</label>
                                                    <input wire:model.lazy='customer.mobile_number' type="number"
                                                        class="form-control @error('customer.mobile_number') is-invalid @enderror"
                                                        placeholder="03XXXXXXXXX">
                                                    @error('customer.mobile_number')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer Email Address</label>
                                                    <input wire:model.lazy='customer.email' type="email"
                                                        class="form-control @error('customer.email') is-invalid @enderror"
                                                        placeholder="johndoe@example.com">
                                                    @error('customer.email')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label">Customer Reference</label>
                                                    <input wire:model.lazy='customer.reference' type="text"
                                                        class="form-control @error('customer.reference') is-invalid @enderror"
                                                        placeholder="Some Name">
                                                    @error('customer.reference')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <label class="form-label">Customer Address</label>
                                                    <textarea wire:model.lazy='customer.address' type="text"
                                                        class="form-control @error('customer.address') is-invalid @enderror" placeholder="Some Address">
                                                        </textarea>
                                                    @error('customer.address')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 text-center mt-2 pt-50">
                                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        Discard
                                                    </button>
                                                </div>
                                            </form>
                                        @endif
                                        @if ($isExisting)
                                            <form wire:submit.prevent='store' class="row gy-1 pt-75">
                                                <div class="col-12 col-md-12">
                                                    <label class="form-label">Customer</label>
                                                    <select wire:model.lazy='custId'
                                                        class="form-control @error('custId') is-invalid @enderror">
                                                        <option value="">Select the Customer</option>
                                                        @forelse ($customers as $cust)
                                                            <option value="{{ $cust->id }}">
                                                                {{ $cust->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No customer found.</option>
                                                        @endforelse
                                                    </select>
                                                    @error('custId')
                                                        <span class="text-danger"><b>{{ $message }}</b></span>
                                                    @enderror
                                                </div>
                                            </form>
                                        @endif
                                        @if ($sale)
                                            <livewire:dashboard.sales-management.plot-sale-component />
                                        @endif
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
