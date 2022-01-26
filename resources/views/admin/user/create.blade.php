@extends('layouts.admin-layout')
@section('admin-content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <div class="input-group">
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Users</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="card-header d-flex justify-content-between bg-dark text-light">
                    <strong class="fs-4"> <i class="uil-chat-bubble-user"></i> New User Create</strong>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm">All Users</a>
                </div>
                <div class="card-body">
                    <div class="row mb-3 mt-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Name <strong
                                class="text-danger">*</strong></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Email <strong
                                class="text-danger">*</strong></label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Phone</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Password <strong
                                class="text-danger">*</strong></label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword5" class="col-3 col-form-label">Re Password <strong
                                class="text-danger">*</strong></label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="password-confirm"
                                name="password_confirmation" placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Selete Role <strong
                                class="text-danger">*</strong></label>
                        <div class="col-9">
                            <select class="form-select mb-3" name="role_id">
                                <option selected>Select Your Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-dark">
                    <div class="justify-content-end row">
                        <div class="col-9">
                            {{-- <button type="submit" class="btn btn-primary">Register</button> --}}
                            <button type="submit" class="btn btn-primary"><i class="uil-sync me-1"></i>
                                <span>Register</span> </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
