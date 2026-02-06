@extends('admin_layouts.app')

@section('wrapper')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Settings</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Site Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#header-tab" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-menu font-18 me-1'></i></div>
                                <div class="tab-title">Header Settings</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#footer-tab" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-layout font-18 me-1'></i></div>
                                <div class="tab-title">Footer Settings</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#homepage-tab" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i></div>
                                <div class="tab-title">Homepage Settings</div>
                            </div>
                        </a>
                    </li>
                </ul>

                <div class="tab-content py-3">
                    <!-- Header Settings Tab -->
                    <div class="tab-pane fade show active" id="header-tab" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @if($headerSettings->count() > 0)
                                    @foreach($headerSettings as $setting)
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-capitalize">{{ str_replace('_', ' ', $setting->setting_key) }}</label>
                                            
                                            @if($setting->setting_type == 'textarea')
                                                <textarea name="{{ $setting->setting_key }}" class="form-control" rows="3">{{ $setting->setting_value }}</textarea>
                                            @elseif($setting->setting_type == 'image')
                                                <input type="file" name="{{ $setting->setting_key }}" class="form-control mb-2">
                                                @if($setting->setting_value)
                                                    <div class="mt-2">
                                                        <img src="{{ asset($setting->setting_value) }}" alt="Current Image" style="max-width: 200px; max-height: 100px; border: 1px solid #ddd; padding: 5px; border-radius: 4px;">
                                                        <br><small class="text-muted">Current: {{ $setting->setting_value }}</small>
                                                    </div>
                                                @endif
                                            @else
                                                <input type="text" name="{{ $setting->setting_key }}" value="{{ $setting->setting_value }}" class="form-control">
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Save Header Settings</button>
                            </div>
                        </form>
                    </div>

                    <!-- Footer Settings Tab -->
                    <div class="tab-pane fade" id="footer-tab" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @if($footerSettings->count() > 0)
                                    @foreach($footerSettings as $setting)
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-capitalize">{{ str_replace('_', ' ', $setting->setting_key) }}</label>
                                            
                                            @if($setting->setting_type == 'textarea')
                                                <textarea name="{{ $setting->setting_key }}" class="form-control" rows="3">{{ $setting->setting_value }}</textarea>
                                            @elseif($setting->setting_type == 'image')
                                                <input type="file" name="{{ $setting->setting_key }}" class="form-control mb-2">
                                                @if($setting->setting_value)
                                                    <div class="mt-2">
                                                        <img src="{{ asset($setting->setting_value) }}" alt="Current Image" style="max-width: 200px; max-height: 100px; border: 1px solid #ddd; padding: 5px; border-radius: 4px;">
                                                        <br><small class="text-muted">Current: {{ $setting->setting_value }}</small>
                                                    </div>
                                                @endif
                                            @else
                                                <input type="text" name="{{ $setting->setting_key }}" value="{{ $setting->setting_value }}" class="form-control">
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Save Footer Settings</button>
                            </div>
                        </form>
                    </div>

                    <!-- Homepage Settings Tab -->
                    <div class="tab-pane fade" id="homepage-tab" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @if($homepageSettings->count() > 0)
                                    @foreach($homepageSettings as $setting)
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label text-capitalize">{{ str_replace('_', ' ', $setting->setting_key) }}</label>
                                            
                                            @if($setting->setting_type == 'textarea')
                                                <textarea name="{{ $setting->setting_key }}" class="form-control" rows="3">{{ $setting->setting_value }}</textarea>
                                            @elseif($setting->setting_type == 'image')
                                                <input type="file" name="{{ $setting->setting_key }}" class="form-control mb-2">
                                                @if($setting->setting_value)
                                                    <div class="mt-2">
                                                        <img src="{{ asset($setting->setting_value) }}" alt="Current Image" style="max-width: 200px; max-height: 100px; border: 1px solid #ddd; padding: 5px; border-radius: 4px;">
                                                        <br><small class="text-muted">Current: {{ $setting->setting_value }}</small>
                                                    </div>
                                                @endif
                                            @elseif($setting->setting_type == 'number')
                                                <input type="number" name="{{ $setting->setting_key }}" value="{{ $setting->setting_value }}" class="form-control">
                                            @else
                                                <input type="text" name="{{ $setting->setting_key }}" value="{{ $setting->setting_value }}" class="form-control">
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Save Homepage Settings</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
