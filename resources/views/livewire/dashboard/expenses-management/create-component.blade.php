<div wire:ignore.self class="modal fade" id="newExpense" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">New Expense Information</h1>
                </div>
                <form wire:submit.prevent='store' class="row gy-1 pt-75">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Society Name</label>
                        <select wire:model.lazy='expense.society_id'
                            class="form-control @error('expense.society_id') is-invalid @enderror">
                            <option value="">Select a society</option>
                            @forelse ($societies as $society)
                                <option value="{{ $society->id }}">{{ $society->name }}</option>
                            @empty
                                <option value="">No society found.</option>
                            @endforelse
                        </select>
                        @error('expense.society_id')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Expense Type</label>
                        <select wire:model.lazy='expense.expense_type_id'
                            class="form-control @error('expense.expense_type_id') is-invalid @enderror">
                            <option value="">Select an expense type</option>
                            @forelse ($expenseTypes as $expenseType)
                                <option value="{{ $expenseType->id }}">{{ $expenseType->name }}</option>
                            @empty
                                <option value="">No expense type found.</option>
                            @endforelse
                        </select>
                        @error('expense.expense_type_id')
                            <span class="text-danger"><b>{{ $message }}</b></span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label">Expense Amount</label>
                        <input wire:model.lazy='expense.amount'
                            class="form-control @error('expense.amount') is-invalid @enderror" placeholder="100000">
                        <small class="text-muted">
                            Note : This expense will be equally divided amount all the plots in the society.
                        </small>
                        <br>
                        @error('expense.amount')
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
