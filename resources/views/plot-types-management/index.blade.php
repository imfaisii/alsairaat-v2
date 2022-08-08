@extends('layouts.app')
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Plot Types Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlotType">
                        <i data-feather="plus"></i>
                        &nbsp;New Plot Type
                    </button>
                </div>
                <div class="card-body">
                    <livewire:tables.plot-types-table />
                </div>
            </div>
        </div>
    </div>
    <!-- create modal -->
    <livewire:dashboard.plot-type-management.create-component />
@endsection
