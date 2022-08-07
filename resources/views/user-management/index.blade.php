@extends('layouts.app')
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Users Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUser">
                        New User
                    </button>
                </div>
                <div class="card-body">
                    <livewire:dashboard.user-management.index-component />
                </div>
            </div>
        </div>
    </div>

    <!-- create modal -->
    <livewire:dashboard.user-management.create-component />
@endsection
