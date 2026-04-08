@extends("admin_layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<style>
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 12px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    .status-pending  { background: #fef3c7; color: #92400e; border: 1px solid #fcd34d; }
    .status-approved { background: #d1fae5; color: #065f46; border: 1px solid #6ee7b7; }
    .status-rejected { background: #fee2e2; color: #7f1d1d; border: 1px solid #fca5a5; }
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
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Website Management</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agent Applications</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius:12px;">
                    <i class="bx bx-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Stats Row --}}
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="stat-box" style="background:#fef3c7; border-color:#fcd34d;padding:10px;">
                        <div class="stat-icon" style="background:#fcd34d; color:#92400e;">
                            <i class="bx bx-time-five"></i>
                        </div>
                        <div>
                            <div class="stat-num" style="color:#92400e;">{{ $pending }}</div>
                            <div class="stat-lbl" style="color:#92400e;">Pending Review</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-box" style="background:#d1fae5; border-color:#6ee7b7;padding:10px;">
                        <div class="stat-icon" style="background:#6ee7b7; color:#065f46;">
                            <i class="bx bx-check-shield"></i>
                        </div>
                        <div>
                            <div class="stat-num" style="color:#065f46;">{{ $approved }}</div>
                            <div class="stat-lbl" style="color:#065f46;">Approved</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-box" style="background:#fee2e2; border-color:#fca5a5;padding:10px;">
                        <div class="stat-icon" style="background:#fca5a5; color:#7f1d1d;">
                            <i class="bx bx-x-circle"></i>
                        </div>
                        <div>
                            <div class="stat-num" style="color:#7f1d1d;">{{ $rejected }}</div>
                            <div class="stat-lbl" style="color:#7f1d1d;">Rejected</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="border-radius:16px; border:none; box-shadow:0 4px 24px rgba(0,0,0,0.07);">
                <div class="card-header d-flex align-items-center justify-content-between"
                     style="background:linear-gradient(135deg,#212958,#1a1f45); border-radius:16px 16px 0 0; padding:18px 24px;">
                    <h6 class="text-white mb-0 fw-bold">
                        <i class="bx bx-user-check me-2"></i> Agent Applications
                    </h6>
                    <span class="badge bg-light text-dark" style="border-radius:50px; font-size:12px; padding:6px 14px;">
                        Total: {{ $agents->count() }}
                    </span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="example" class="table table-hover mb-0" style="width:100%;">
                            <thead style="background:#f8fafc;">
                                <tr>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">#</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Applicant</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Contact</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Location</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Organization</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Status</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Date</th>
                                    <th style="padding:14px 16px; font-size:12px; text-transform:uppercase; letter-spacing:0.8px; color:#6b7280; font-weight:700;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($agents as $index => $agent)
                                    <tr style="border-bottom:1px solid #f1f5f9;">
                                        <td style="padding:14px 16px; font-size:13px; color:#6b7280;">{{ $index + 1 }}</td>
                                        <td style="padding:14px 16px;">
                                            <div style="display:flex; align-items:center; gap:10px;">
                                                <div style="width:38px; height:38px; border-radius:50%; background:linear-gradient(135deg,#212958,#DA3A34); display:flex; align-items:center; justify-content:center; color:#fff; font-size:14px; font-weight:700; flex-shrink:0;">
                                                    {{ strtoupper(substr($agent->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <div style="font-size:14px; font-weight:700; color:#1e293b;">{{ $agent->name }}</div>
                                                    <div style="font-size:12px; color:#6b7280;">{{ $agent->occupation ?? 'N/A' }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="padding:14px 16px;">
                                            <div style="font-size:13px; color:#374151;">
                                                <div><i class="bx bx-envelope" style="color:#DA3A34;"></i> {{ $agent->email }}</div>
                                                <div><i class="bx bx-phone" style="color:#DA3A34;"></i> {{ $agent->number }}</div>
                                            </div>
                                        </td>
                                        <td style="padding:14px 16px; font-size:13px; color:#374151;">
                                            @if($agent->country)
                                                <div><i class="bx bx-globe" style="color:#6b7280;"></i> {{ $agent->country }}</div>
                                            @endif
                                            <div style="font-size:12px; color:#9ca3af;">{{ Str::limit($agent->address, 30) }}</div>
                                        </td>
                                        <td style="padding:14px 16px; font-size:13px;">
                                            @if($agent->organization)
                                                <div style="font-weight:600; color:#212958;">{{ $agent->organization }}</div>
                                            @endif
                                            @if($agent->website)
                                                <a href="{{ $agent->website }}" target="_blank" style="font-size:12px; color:#DA3A34; text-decoration:none;">
                                                    <i class="bx bx-link-external"></i> Website
                                                </a>
                                            @endif
                                            @if(!$agent->organization && !$agent->website)
                                                <span style="color:#9ca3af; font-size:12px;">—</span>
                                            @endif
                                        </td>
                                        <td style="padding:14px 16px;">
                                            @if($agent->status === 'approved')
                                                <span class="status-badge status-approved"><i class="bx bx-check-circle"></i> Approved</span>
                                            @elseif($agent->status === 'rejected')
                                                <span class="status-badge status-rejected"><i class="bx bx-x-circle"></i> Rejected</span>
                                            @else
                                                <span class="status-badge status-pending"><i class="bx bx-time-five"></i> Pending</span>
                                            @endif
                                            @if($agent->admin_note)
                                                <div style="font-size:11px; color:#9ca3af; margin-top:4px;" title="{{ $agent->admin_note }}">
                                                    <i class="bx bx-note"></i> {{ Str::limit($agent->admin_note, 20) }}
                                                </div>
                                            @endif
                                        </td>
                                        <td style="padding:14px 16px; font-size:12px; color:#9ca3af; white-space:nowrap;">
                                            {{ $agent->created_at ? $agent->created_at->format('d M Y') : '—' }}
                                        </td>
                                        <td style="padding:14px 16px;">
                                            <div style="display:flex; gap:6px; flex-wrap:wrap;">
                                                <!-- Update Status Button -->
                                                <button class="action-btn btn btn-sm btn-outline-primary"
                                                        style="border-radius:8px; font-size:11px;"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#statusModal{{ $agent->id }}">
                                                    <i class="bx bx-edit"></i> Manage
                                                </button>
                                                <!-- Delete -->
                                                <form action="/agents-request/{{ $agent->id }}" method="POST"
                                                      onsubmit="return confirm('Are you sure you want to delete this application?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="action-btn btn btn-sm btn-outline-danger"
                                                            style="border-radius:8px; font-size:11px;" type="submit">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Status Modal --}}
                                    <div class="modal fade" id="statusModal{{ $agent->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered" style="max-width:460px;">
                                            <div class="modal-content" style="border-radius:20px; border:none; box-shadow:0 20px 60px rgba(0,0,0,0.15);">
                                                <div class="modal-header" style="background:linear-gradient(135deg,#212958,#1a1f45); border-radius:20px 20px 0 0; padding:20px 24px 18px;">
                                                    <div>
                                                        <h5 class="modal-title text-white fw-bold mb-0">
                                                            <i class="bx bx-user-check me-2"></i>Manage Application
                                                        </h5>
                                                        <small class="text-white-50">{{ $agent->name }} — {{ $agent->email }}</small>
                                                    </div>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="/agents-request/{{ $agent->id }}/status" method="POST">
                                                    @csrf
                                                    <div class="modal-body" style="padding:24px;">

                                                        {{-- Applicant info recap --}}
                                                        <div style="background:#f8fafc; border-radius:12px; padding:14px 16px; margin-bottom:20px; font-size:13px;">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span style="color:#6b7280;">Phone:</span>
                                                                <span style="font-weight:600;">{{ $agent->number }}</span>
                                                            </div>
                                                            @if($agent->country)
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span style="color:#6b7280;">Country:</span>
                                                                <span style="font-weight:600;">{{ $agent->country }}</span>
                                                            </div>
                                                            @endif
                                                            @if($agent->organization)
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span style="color:#6b7280;">Organization:</span>
                                                                <span style="font-weight:600;">{{ $agent->organization }}</span>
                                                            </div>
                                                            @endif
                                                            <div class="d-flex justify-content-between">
                                                                <span style="color:#6b7280;">Address:</span>
                                                                <span style="font-weight:600; text-align:right; max-width:200px;">{{ $agent->address }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold" style="font-size:13px;">Update Status</label>
                                                            <select name="status" class="form-select" style="border-radius:10px; border:1.5px solid #e5e7eb; font-size:14px;">
                                                                <option value="pending"  {{ $agent->status === 'pending'  ? 'selected' : '' }}>⏳ Pending Review</option>
                                                                <option value="approved" {{ $agent->status === 'approved' ? 'selected' : '' }}>✅ Approved</option>
                                                                <option value="rejected" {{ $agent->status === 'rejected' ? 'selected' : '' }}>❌ Rejected</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-1">
                                                            <label class="form-label fw-bold" style="font-size:13px;">Admin Note <small class="text-muted fw-normal">(shown internally only)</small></label>
                                                            <textarea name="admin_note" class="form-control" rows="3"
                                                                      style="border-radius:10px; border:1.5px solid #e5e7eb; font-size:14px; resize:none;"
                                                                      placeholder="Add a note about this application...">{{ $agent->admin_note }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="border-top:1px solid #f1f5f9; padding:16px 24px; gap:10px;">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius:10px; font-size:13px;">Cancel</button>
                                                        <button type="submit" class="btn text-white fw-bold" style="border-radius:10px; font-size:13px; background:linear-gradient(135deg,#212958,#DA3A34); border:none; padding:9px 24px;">
                                                            <i class="bx bx-save me-1"></i> Save Changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-5" style="color:#9ca3af;">
                                            <i class="bx bx-inbox" style="font-size:48px; display:block; margin-bottom:10px;"></i>
                                            No agent applications yet.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section("script")
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            order: [[6, 'desc']],
            pageLength: 25,
            language: {
                search: "🔍 Search applications:",
                lengthMenu: "Show _MENU_ entries",
            }
        });
    });
</script>
@endsection
