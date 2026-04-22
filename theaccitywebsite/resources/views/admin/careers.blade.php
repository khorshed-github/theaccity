@extends("admin_layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<style>
    .stat-box {
        border-radius: 14px;
        padding: 20px 22px;
        display: flex;
        align-items: center;
        gap: 16px;
        border: 1.5px solid;
        transition: all 0.25s ease;
    }
    .stat-box:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
    .stat-icon {
        width: 52px; height: 52px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }
    .stat-num { font-size: 28px; font-weight: 800; line-height: 1; }
    .stat-lbl { font-size: 13px; font-weight: 600; opacity: 0.8; }
    .action-btn {
        border: none;
        border-radius: 8px;
        padding: 5px 10px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
    }
    .action-btn:hover { transform: scale(1.05); }
</style>
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Website Management</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Career Applications</li>
                        </ol>
                    </nav>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius:12px;">
                    <i class="bx bx-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card" style="border-radius:16px; border:none; box-shadow:0 4px 24px rgba(0,0,0,0.07);">
                <div class="card-header d-flex align-items-center justify-content-between"
                     style="background:linear-gradient(135deg,#212958,#1a1f45); border-radius:16px 16px 0 0; padding:18px 24px;">
                    <h6 class="text-white mb-0 fw-bold">
                        <i class="bx bx-briefcase me-2"></i> Career Applications
                    </h6>
                    <span class="badge bg-light text-dark" style="border-radius:50px; font-size:12px; padding:6px 14px;">
                        Total: {{ $careers->count() }}
                    </span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="careerTable" class="table table-hover mb-0" style="width:100%;">
                            <thead style="background:#f8fafc;">
                                <tr>
                                    <th class="ps-4">#</th>
                                    <th>Applicant</th>
                                    <th>Contact Info</th>
                                    <th>Nationality</th>
                                    <th>Education</th>
                                    <th>CV</th>
                                    <th>Date</th>
                                    <th class="pe-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($careers as $index => $career)
                                    <tr style="border-bottom:1px solid #f1f5f9;">
                                        <td class="ps-4" style="font-size:13px; color:#6b7280;">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width:35px; height:35px; border-radius:50%; background:#212958; color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:14px;">
                                                    {{ strtoupper(substr($career->fullName, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <div class="fw-bold text-dark" style="font-size:14px;">{{ $career->fullName }}</div>
                                                    <div class="text-muted" style="font-size:11px;">{{ Str::limit($career->address, 25) }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size:13px;">
                                                <div><i class="bx bx-envelope text-danger"></i> {{ $career->email }}</div>
                                                <div><i class="bx bx-phone text-danger"></i> {{ $career->phone }}</div>
                                            </div>
                                        </td>
                                        <td style="font-size:13px;">{{ $career->nationality }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-link p-0" data-bs-toggle="tooltip" title="{{ $career->education }}">
                                                {{ Str::limit($career->education, 20) }}
                                            </button>
                                        </td>
                                        <td>
                                            <a href="{{ asset($career->cv) }}" target="_blank" class="btn btn-sm btn-outline-danger" style="border-radius:8px; font-size:11px;">
                                                <i class="bx bx-file"></i> View CV
                                            </a>
                                        </td>
                                        <td style="font-size:12px; color:#9ca3af;">{{ $career->created_at->format('d M Y') }}</td>
                                        <td class="pe-4">
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#viewModal{{ $career->id }}">
                                                    <i class="bx bx-show"></i>
                                                </button>
                                                <form action="{{ route('admin.career-request.destroy', $career->id) }}" method="POST" onsubmit="return confirm('Delete this application?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- View Modal -->
                                    <div class="modal fade" id="viewModal{{ $career->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content" style="border-radius:15px; border:none;">
                                                <div class="modal-header bg-dark text-white" style="border-radius:15px 15px 0 0;">
                                                    <h5 class="modal-title text-white">Application Details</h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="row g-4">
                                                        <div class="col-md-6">
                                                            <label class="fw-bold mb-1">Full Name</label>
                                                            <p class="text-muted">{{ $career->fullName }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="fw-bold mb-1">Email</label>
                                                            <p class="text-muted">{{ $career->email }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="fw-bold mb-1">Phone</label>
                                                            <p class="text-muted">{{ $career->phone }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="fw-bold mb-1">Nationality</label>
                                                            <p class="text-muted">{{ $career->nationality }}</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="fw-bold mb-1">Address</label>
                                                            <p class="text-muted">{{ $career->address }}</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="fw-bold mb-1">Immigration Status / Share Code</label>
                                                            <div class="p-3 bg-light rounded">{{ $career->immigration }}</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="fw-bold mb-1">Education</label>
                                                            <div class="p-3 bg-light rounded">{{ $career->education }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{ asset($career->cv) }}" target="_blank" class="btn btn-danger">Download CV</a>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-5 text-muted">No applications found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#careerTable').DataTable({
            order: [[6, 'desc']],
            pageLength: 25
        });
    });
</script>
@endsection
