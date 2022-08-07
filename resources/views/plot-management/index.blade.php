@extends('layouts.app')
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Plots Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlot">
                        <i data-feather="plus"></i>
                        &nbsp;New Plot
                    </button>
                </div>
                <div class="card-body">
                    <livewire:tables.plots-table />
                </div>
            </div>
        </div>
    </div>
    <!-- create modal -->
    <livewire:dashboard.plot-management.create-component />
@endsection
