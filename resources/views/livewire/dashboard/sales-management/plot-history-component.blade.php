<div wire:ignore.self class="modal fade" id="plotExpenseHistory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div wire:submit.prevent='store' class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Plot Expense History</h1>
                </div>
                @if (count($history) > 0)
                    <div class="accordion" id="accordionHover" data-toggle-hover="true">
                        @foreach ($history as $date => $payments)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingHover{{ $loop->iteration }}">
                                    <button class="accordion-button collapsed accordion-hover-title" type="button"
                                        style="background: lightgoldenrodyellow;color:black;" data-bs-toggle="collapse"
                                        data-bs-target="#accordionHover{{ $loop->iteration }}" aria-expanded="false"
                                        aria-controls="accordionHover{{ $loop->iteration }}">
                                        {{ $date }}
                                        &nbsp;&nbsp;&nbsp;
                                        <span class="badge bg-success"> {{ count($payments) }}
                                            Payment(s)
                                        </span>
                                    </button>
                                </h2>
                                <div id="accordionHover{{ $loop->iteration }}" class="accordion-collapse collapse"
                                    aria-labelledby="headingHover{{ $loop->iteration }}"
                                    data-bs-parent="#accordionHover">
                                    <div class="accordion-body">
                                        @foreach ($payments as $payment)
                                            <li>Paid an amount of Rs. {{ $payment['amount'] }} in an expense of
                                                {{ $payment['expense']['expense_type']['name'] }}.
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div wire:loading.remove class="accordion-item">
                        <h2 class="accordion-header" id="headingHoverOne">
                            <button class="accordion-button collapsed accordion-hover-title" type="button"
                                style="background: lightgoldenrodyellow;color:black;" data-bs-toggle="collapse"
                                data-bs-target="#accordionHoverOne" aria-expanded="false"
                                aria-controls="accordionHoverOne">
                                No payments.
                            </button>
                        </h2>
                    </div>
                    <div wire:loading class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
