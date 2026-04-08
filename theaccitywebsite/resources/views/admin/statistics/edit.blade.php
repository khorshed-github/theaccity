@extends('admin_layouts.app')

@section('wrapper')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Homepage Statistics</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Statistic</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.statistics.index') }}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-bar-chart-alt-2 me-1 font-22 text-primary"></i></div>
                            <h5 class="mb-0 text-primary">Edit Statistic</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('admin.statistics.update', $statistic->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="label" class="form-label">Label</label>
                                <input type="text" class="form-control" id="label" name="label" value="{{ $statistic->label }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="value" class="form-label">Value</label>
                                <input type="number" class="form-control" id="value" name="value" value="{{ $statistic->value }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="suffix" class="form-label">Suffix (Optional)</label>
                                <input type="text" class="form-control" id="suffix" name="suffix" value="{{ $statistic->suffix }}">
                            </div>
                            <div class="col-md-6">
                                <label for="display_order" class="form-label">Display Order</label>
                                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ $statistic->display_order }}">
                            </div>
                            <div class="col-12">
                                <label for="icon" class="form-label">Icon Image</label>
                                <input type="file" class="form-control mb-2" id="icon" name="icon">
                                @if($statistic->icon)
                                    <div class="mt-2">
                                        <img src="{{ asset($statistic->icon) }}" width="100" class="border p-1" alt="{{ $statistic->label }}">
                                        <div class="text-muted small mt-1">Current Icon</div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
