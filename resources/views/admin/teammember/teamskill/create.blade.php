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
                <h4 class="page-title">Team Members</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{ route('team-skill.store') }}" method="POST">
                    @csrf
                    <div class="card-header d-flex justify-content-between">
                        <strong class="fs-4"> <i class="uil-trademark-circle"></i> New Member Skill
                            Create</strong>
                        <a href="{{ route('team-skill.index') }}" class="btn btn-dark btn-sm"><i
                                class="uil-trademark-circle"></i> All Member Skill</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-3 mt-3">
                                <label for="name" class="col-3 col-form-label">Skill Name <strong
                                        class="text-danger">*</strong></label>
                                <div class="col-12">
                                    <input type="text" value="{{ old('ts_name') }}"
                                        class="form-control @error('ts_name') is-invalid @enderror" id="ts_name"
                                        name="ts_name" placeholder="Member Name">
                                    @error('ts_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mb-3 mt-3">
                                <label for="name" class="col-3 col-form-label">Skill Range <strong
                                        class="text-danger">*</strong></label>
                                <div class="col-12">
                                    <input type="number" value="{{ old('ts_range') }}"
                                        class="form-control @error('ts_range') is-invalid @enderror" id="ts_range"
                                        name="ts_range" placeholder="Skill Range %">
                                    @error('ts_range')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @php
                                $temes = App\Models\TeamMember::where('team_status', 1)
                                    ->orderBy('team_id', 'DESC')
                                    ->get();
                            @endphp
                            <div class="col-12 mb-3">
                                <label for="role" class="col-3 col-form-label">Selete Team Member <strong
                                        class="text-danger">*</strong></label>
                                <div class="col-9">
                                    <select class="form-select mb-3 @error('team_id') is-invalid @enderror" name="team_id">
                                        <option selected>Select Your Role</option>
                                        @foreach ($temes as $member)
                                            <option value="{{ $member->team_id }}">{{ $member->team_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="email" class="col-3 col-form-label">Order By <strong
                                        class="text-danger">*</strong></label>
                                <div class="col-12">
                                    <input type="number" value="{{ old('ts_order') }}"
                                        class="form-control @error('ts_order') is-invalid @enderror" id="ts_order"
                                        name="ts_order" placeholder="Member Skill Order">
                                    @error('ts_order')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-dark row justify-content-md-center">
                        <div class="col col-lg-3">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="uil-sync me-1"></i>
                                <span>Skill Save</span> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#example-fileinput').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

        });
    </script>
@endsection
