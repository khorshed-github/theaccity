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
                        <li class="breadcrumb-item active" aria-current="page">Statistics List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.statistics.add') }}" class="btn btn-primary">Add New Statistic</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Icon</th>
                                <th>Label</th>
                                <th>Value</th>
                                <th>Suffix</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statistics as $key => $statistic)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if($statistic->icon)
                                            <img src="{{ asset($statistic->icon) }}" width="50" alt="{{ $statistic->label }}">
                                        @else
                                            No Icon
                                        @endif
                                    </td>
                                    <td>{{ $statistic->label }}</td>
                                    <td>{{ $statistic->value }}</td>
                                    <td>{{ $statistic->suffix }}</td>
                                    <td>{{ $statistic->display_order }}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route('admin.statistics.edit', $statistic->id) }}" class="text-primary bg-light-primary border-0 me-3"><i class='bx bxs-edit'></i></a>
                                            <form action="{{ route('admin.statistics.destroy', $statistic->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this statistic?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Icon</th>
                                <th>Label</th>
                                <th>Value</th>
                                <th>Suffix</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
