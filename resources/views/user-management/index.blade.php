@extends('layouts.app')
@section('content')
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-between">
                    <h4 class="card-title">Users Table</h4>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUser">
                        <i data-feather="plus"></i>
                        &nbsp;New User
                    </button>
                </div>
                <div class="card-body">
                    <livewire:tables.users-table />
                </div>
            </div>
        </div>
    </div>

    <!-- create modal -->
    <livewire:dashboard.user-management.create-component />
@endsection
