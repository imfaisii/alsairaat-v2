@extends('layouts.app')
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Expenses Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newExpense">
                        <i data-feather="plus"></i>
                        &nbsp;New Expense
                    </button>
                </div>
                <div class="card-body">
                    <livewire:tables.expenses-table />
                </div>
            </div>
        </div>
    </div>
    <!-- create modal -->
    <livewire:dashboard.expenses-management.create-component />
@endsection
