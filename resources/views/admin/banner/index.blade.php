
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
            <h4 class="page-title">Banner</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between bg-dark text-light">
                <strong class="fs-4"> <i class="uil-meeting-board"></i> All Banner Information</strong>
                <a href="{{ route('banner.create') }}" class="btn btn-secondary btn-sm">Create Banner</a>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Order By</th>
                            <th>Creator</th>
                            <th>Publish</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>
                                    @if ($banner->ban_image)
                                    <img src="{{ asset('uploads/banner/'.$banner->ban_image) }}" alt="image" class="img-fluid avatar-sm rounded">
                                    @else
                                    <img src="{{ asset('uploads/no image.png') }}" alt="image" class="img-fluid avatar-sm rounded">
                                    @endif
                                </td>
                                <td>{{ $banner->ban_title }}</td>
                                <td>{{ $banner->ban_order }}</td>
                                <td>{{ $banner->user->name }}</td>
                                <td>
                                    @if ($banner->ban_publish === 1)
                                    <span class="badge badge-success-lighten">Published</span>
                                    @else
                                    <span class="badge badge-danger-lighten">Unpublished</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($banner->ban_status === 1)
                                    <span class="badge badge-success-lighten">Active</span>
                                    @else
                                    <span class="badge badge-danger-lighten">Blocked</span>
                                    @endif
                                </td>
                                <td class="table-action">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>
                                    <div class="dropdown-menu">
                                    <a href="{{ route('banner.show',$banner->ban_id) }}" class="dropdown-item"> <i class="mdi mdi-eye"></i> Show</a>
                                    <a href="{{ route('banner.edit',$banner->ban_id) }}" class="dropdown-item"> <i class="mdi mdi-pencil"></i> Edit</a>
                                    <a href="#" data-bs-toggle="modal" data-value="{{ $banner->ban_id }}" data-bs-target="#deleteModal" class=" text-danger delete-modal dropdown-item"> <i class="mdi mdi-delete"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">
                Do you really want to delete these records? This process cannot be undone.
            </div>
            <div class="modal-footer">
                <form action="{{ route('banner.destroy',$banner->ban_id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="delete_data">Yes, delete it</button>
                </form>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div>
<!-- end modal-->
@endsection
