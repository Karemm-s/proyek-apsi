<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ruang Kerja') | Satgas PPKS FSH UINSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{--ink:#173b36;--muted:#627a74;--teal:#0f766e;--teal-dark:#115e59;--green:#32a885;--line:#d9e8e2;--surface:#fff;--canvas:#f1f7f4;--sidebar:#123b36;--sidebar-muted:#c5ddd4}
        *{box-sizing:border-box}body{margin:0;background:var(--canvas);color:var(--ink);font:14px 'Plus Jakarta Sans',sans-serif}.portal-layout{min-height:100vh;display:flex}.portal-sidebar{--bs-offcanvas-width:274px;width:var(--bs-offcanvas-width);flex:0 0 var(--bs-offcanvas-width);background:var(--sidebar);color:#fff;border:0}.portal-sidebar .offcanvas-body{display:flex;flex-direction:column;padding:20px 14px 16px}.sidebar-brand{display:flex;align-items:center;gap:12px;color:#fff;text-decoration:none;font-size:1rem;font-weight:800;padding:4px 8px 22px}.sidebar-brand:hover{color:#fff}.brand-mark{width:42px;height:42px;display:grid;place-items:center;border-radius:13px;background:var(--green);color:#fff;font-size:1.25rem}.brand-caption{display:block;color:#b9ceca;font-size:.62rem;letter-spacing:.11em;font-weight:700;margin-top:3px}.role-chip{display:flex;align-items:center;gap:9px;margin:0 4px 19px;padding:11px 12px;background:#ffffff10;border:1px solid #ffffff1d;border-radius:12px;color:#fff;font-size:.78rem;font-weight:700}.role-chip i{color:#7ed1bb;font-size:1rem}.menu-caption{padding:12px 11px 6px;color:#9dbab5;font-size:.61rem;font-weight:800;letter-spacing:.12em;text-transform:uppercase}.portal-nav{display:grid;gap:4px}.portal-nav .nav-link{display:flex;align-items:center;gap:11px;padding:10px 12px;border-radius:10px;color:#d6e4e1;font-size:.78rem;font-weight:600;text-decoration:none;transition:background .15s,color .15s}.portal-nav .nav-link i{width:18px;font-size:1rem;text-align:center}.portal-nav .nav-link:hover{background:#ffffff12;color:#fff}.portal-nav .nav-link.active{background:var(--green);color:#fff;box-shadow:0 5px 14px #071f202c}.sidebar-bottom{margin-top:auto;padding-top:18px;border-top:1px solid #ffffff20}.sidebar-bottom .nav-link{color:#d6e4e1}.portal-workspace{min-width:0;flex:1}.portal-topbar{height:72px;position:sticky;top:0;z-index:1020;display:flex;align-items:center;justify-content:space-between;gap:18px;padding:0 clamp(18px,3vw,42px);background:#fff;border-bottom:1px solid var(--line)}.topbar-label{font-size:.7rem;color:var(--muted);font-weight:700;letter-spacing:.06em;text-transform:uppercase}.topbar-actions{display:flex;align-items:center;gap:10px}.user-pill{display:flex;align-items:center;gap:9px;padding:6px 11px;border:1px solid var(--line);border-radius:12px;background:#fff}.user-avatar{width:31px;height:31px;display:grid;place-items:center;border-radius:9px;background:#e5f1ed;color:var(--teal);font-size:.9rem}.user-name{font-size:.74rem;font-weight:700;line-height:1.2}.user-role{font-size:.62rem;color:var(--muted);margin-top:2px}.sidebar-toggle{width:39px;height:39px;display:grid;place-items:center;border:1px solid var(--line);border-radius:10px;background:#fff;color:var(--teal);font-size:1.25rem}.sidebar-toggle:hover{background:#edf5f2}.internal-main{width:min(1500px,100%);margin:0 auto;padding:30px clamp(18px,3vw,44px) 60px}.page-intro{display:flex;align-items:center;justify-content:space-between;gap:18px;margin:0 0 24px}.page-kicker{font-size:.64rem;text-transform:uppercase;letter-spacing:.12em;color:var(--green);font-weight:800}.page-title{font-size:clamp(1.45rem,2vw,1.9rem);letter-spacing:-.045em;font-weight:800;margin:3px 0 0;color:var(--ink)}.internal-main .card,.overview-card{border:1px solid var(--line);border-radius:15px;background:var(--surface);box-shadow:0 4px 16px #18383b08}.internal-main .btn{min-height:38px;border-radius:9px;font-weight:700;font-size:.78rem;padding:.55rem .85rem}.internal-main .btn-sm{min-height:32px;padding:.4rem .65rem;font-size:.72rem}.internal-main .btn-success{background:var(--green);border-color:var(--green);color:white}.internal-main .btn-success:hover,.internal-main .btn-success:focus{background:#106f5d;border-color:#106f5d}.internal-main .btn-outline-secondary{color:#42595a;border-color:#cbd8d5;background:white}.internal-main .btn-outline-secondary:hover{color:var(--teal-dark);border-color:#8faeaa;background:#eef5f2}.internal-main .btn-outline-primary{color:var(--teal);border-color:#9bbab5}.internal-main .btn-outline-primary:hover{color:#fff;border-color:var(--teal);background:var(--teal)}.internal-main .btn-outline-danger{color:#a44642;border-color:#d8a09c}.internal-main .btn-outline-danger:hover{color:#fff;background:#a44642;border-color:#a44642}.internal-main .form-control,.internal-main .form-select{min-height:40px;border-color:#d5e0dc;border-radius:9px;color:var(--ink);font-size:.8rem}.internal-main textarea.form-control{min-height:unset}.internal-main .form-control:focus,.internal-main .form-select:focus{border-color:#65a89a;box-shadow:0 0 0 .2rem #16836f20}.internal-main .form-label{color:#435a5b}.internal-main .table{--bs-table-color:var(--ink);margin-bottom:0}.internal-main .table>:not(caption)>*>*{padding:12px 14px;border-bottom-color:#eaf0ee}.internal-main .table thead th{background:#f4f8f6;color:#586d6d;font-size:.65rem;text-transform:uppercase;letter-spacing:.07em;white-space:nowrap}.internal-main .table tbody td{font-size:.77rem}.internal-main .table-hover tbody tr:hover>*{background:#f7faf9}.internal-main .badge{font-size:.65rem;font-weight:700;padding:.42rem .6rem;border-radius:99px}.internal-main .alert{border-radius:12px;font-size:.8rem;line-height:1.6}.internal-main .alert-info{color:#285d5c;background:#e6f3ef}.internal-main .alert-warning{color:#755b27;background:#fff4d8}.internal-main .alert-success{color:#1c674e;background:#e5f4ed}.internal-main .alert-danger{color:#8d3e3a;background:#fae9e7}.muted{color:var(--muted)}.metric{font-size:1.75rem;font-weight:800;letter-spacing:-.05em;color:var(--ink)}.metric-label{font-size:.72rem;color:var(--muted);font-weight:650}.page-subtitle{font-size:.8rem;color:var(--muted)}.progress{background:#e7efec;border-radius:99px}.progress-bar{background:var(--green)!important}.dropdown-menu{border:1px solid var(--line);border-radius:12px;box-shadow:0 12px 30px #163b3d18}.internal-main a:not(.btn){color:var(--teal)}.internal-main a:not(.btn):hover{color:var(--green)}:focus-visible{outline:3px solid #45a993!important;outline-offset:2px}.offcanvas-backdrop.show{opacity:.55}
        .status-badge{display:inline-flex;align-items:center;padding:5px 9px;border-radius:99px;background:#eaf3f0;color:#285e56;font-size:.65rem;font-weight:700;text-transform:capitalize}
        .portal-sidebar .brand-mark{background:#32a885}.portal-sidebar .role-chip i{color:#91e0c1}.portal-sidebar .nav-link.active{background:#238e70;box-shadow:0 5px 14px #071f202c}.portal-sidebar .nav-link:hover{background:#ffffff18}.portal-sidebar .sidebar-bottom{border-top-color:#ffffff2c}.user-avatar{background:#def3e9;color:#0f766e}
        .internal-main .form-control:focus,.internal-main .form-select:focus{border-color:#55ad92;box-shadow:0 0 0 .2rem #169b7824}.internal-main .btn-success{background:#0f766e;border-color:#0f766e}.internal-main .btn-success:hover,.internal-main .btn-success:focus{background:#115e59;border-color:#115e59}.internal-main .btn-outline-success{color:#0f766e;border-color:#82bca9}.internal-main .btn-outline-success:hover{color:#fff;background:#0f766e;border-color:#0f766e}.internal-main a:not(.btn){color:#0f766e}.internal-main a:not(.btn):hover{color:#168f72}.internal-main .status-badge{background:#e2f3eb;color:#176c57}.internal-main .progress-bar{background:#1a9677!important}.page-kicker{color:#16866b}
        @media(min-width:1200px){.portal-sidebar{position:sticky;top:0;height:100vh}.portal-sidebar .offcanvas-body{height:100%;overflow-y:auto}}
        @media(max-width:1199.98px){.portal-sidebar{--bs-offcanvas-width:290px}.portal-sidebar .offcanvas-body{height:100%;overflow-y:auto}.portal-topbar{height:64px}.internal-main{padding-top:24px}}
        @media(max-width:575.98px){.portal-topbar{padding:0 14px}.topbar-label{display:none}.user-pill{padding:5px 7px}.user-role{display:none}.user-name{max-width:118px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.topbar-actions{gap:7px}.internal-main{padding:22px 14px 42px}.page-intro{margin-bottom:18px}.page-title{font-size:1.45rem}}
    </style>
    @stack('styles')
</head>
<body>
@php($role=auth()->user()->role)
<div class="portal-layout">
    <aside class="offcanvas-xl offcanvas-start portal-sidebar" tabindex="-1" id="portalSidebar" aria-labelledby="portalSidebarLabel">
        <div class="offcanvas-header d-xl-none">
            <span id="portalSidebarLabel" class="text-white fw-bold">Menu navigasi</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#portalSidebar" aria-label="Tutup menu"></button>
        </div>
        <div class="offcanvas-body">
            <a href="{{ route('internal.dashboard') }}" class="sidebar-brand"><span class="brand-mark"><i class="bi bi-shield-check"></i></span><span>Satgas PPKS<span class="brand-caption">FSH UINSA · PORTAL INTERNAL</span></span></a>
            <div class="role-chip"><i class="bi bi-person-badge"></i><span>{{ str_replace('_',' ',ucfirst($role)) }}</span></div>
            <nav class="portal-nav" aria-label="Navigasi utama">
                <div class="menu-caption">Ruang kerja</div>
                <a class="nav-link {{ request()->routeIs('internal.dashboard')?'active':'' }}" href="{{ route('internal.dashboard') }}"><i class="bi bi-grid-1x2"></i><span>{{ $role==='tim_satgas'?'Pengaduan':'Dashboard' }}</span></a>
                @if($role==='ketua_satgas')
                    <a class="nav-link {{ request()->routeIs('internal.monitoring')?'active':'' }}" href="{{ route('internal.monitoring') }}"><i class="bi bi-inbox"></i><span>Pengaduan</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.unmasking')?'active':'' }}" href="{{ route('internal.unmasking') }}"><i class="bi bi-person-vcard"></i><span>Perlindungan Identitas</span></a>
                    <div class="menu-caption">Penanganan kasus</div>
                    <a class="nav-link {{ request()->routeIs('internal.summons*')?'active':'' }}" href="{{ route('internal.summons') }}"><i class="bi bi-envelope-paper"></i><span>Pemanggilan & SP-3</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.assignments')?'active':'' }}" href="{{ route('internal.assignments') }}"><i class="bi bi-diagram-3"></i><span>Penugasan & Rujukan</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.escalations')?'active':'' }}" href="{{ route('internal.escalations') }}"><i class="bi bi-exclamation-diamond"></i><span>Eskalasi Pimpinan</span></a>
                    <div class="menu-caption">Laporan</div>
                    <a class="nav-link {{ request()->routeIs('internal.analytics')?'active':'' }}" href="{{ route('internal.analytics') }}"><i class="bi bi-bar-chart"></i><span>Statistik Kasus</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.reports')?'active':'' }}" href="{{ route('internal.reports') }}"><i class="bi bi-file-earmark-spreadsheet"></i><span>Rekap & Ekspor</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.history')?'active':'' }}" href="{{ route('internal.history') }}"><i class="bi bi-clock-history"></i><span>Riwayat Penanganan</span></a>
                    <div class="menu-caption">Pengelolaan</div>
                    <a class="nav-link {{ request()->routeIs('internal.staff')?'active':'' }}" href="{{ route('internal.staff') }}"><i class="bi bi-people"></i><span>Manajemen Petugas</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.audit')?'active':'' }}" href="{{ route('internal.audit') }}"><i class="bi bi-journal-check"></i><span>Audit Log</span></a>
                @elseif($role==='psikolog')
                    <div class="menu-caption">Pendampingan</div>
                    <a class="nav-link {{ request()->routeIs('internal.sessions')?'active':'' }}" href="{{ route('internal.sessions') }}"><i class="bi bi-calendar-event"></i><span>Jadwal Pendampingan</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.psychologist.feedback*')?'active':'' }}" href="{{ route('internal.psychologist.feedback') }}"><i class="bi bi-chat-square-heart"></i><span>Umpan Balik</span></a>
                @elseif($role==='tim_satgas')
                    <div class="menu-caption">Tugas saya</div>
                    <a class="nav-link {{ request()->routeIs('internal.staff.assignments')?'active':'' }}" href="{{ route('internal.staff.assignments') }}"><i class="bi bi-person-check"></i><span>Kasus Ditugaskan</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.staff.summons')?'active':'' }}" href="{{ route('internal.staff.summons') }}"><i class="bi bi-envelope-paper"></i><span>Pemanggilan</span></a>
                @elseif($role==='pimpinan')
                    <a class="nav-link {{ request()->routeIs('internal.monitoring')?'active':'' }}" href="{{ route('internal.monitoring') }}"><i class="bi bi-eye"></i><span>Monitoring</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.escalations')?'active':'' }}" href="{{ route('internal.escalations') }}"><i class="bi bi-exclamation-diamond"></i><span>Eskalasi</span></a>
                    <div class="menu-caption">Laporan terbatas</div>
                    <a class="nav-link {{ request()->routeIs('internal.analytics')?'active':'' }}" href="{{ route('internal.analytics') }}"><i class="bi bi-bar-chart"></i><span>Statistik</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.reports')?'active':'' }}" href="{{ route('internal.reports') }}"><i class="bi bi-file-text"></i><span>Rekap</span></a>
                    <a class="nav-link {{ request()->routeIs('internal.history')?'active':'' }}" href="{{ route('internal.history') }}"><i class="bi bi-clock-history"></i><span>Riwayat</span></a>
                @endif
            </nav>
            <div class="sidebar-bottom portal-nav">
                <a class="nav-link {{ request()->routeIs('internal.profile')?'active':'' }}" href="{{ route('internal.profile') }}"><i class="bi bi-person-gear"></i><span>Profil</span></a>
                <form method="post" action="{{ route('internal.logout') }}">@csrf<button type="submit" class="nav-link w-100 border-0 bg-transparent text-start"><i class="bi bi-box-arrow-right"></i><span>Keluar</span></button></form>
            </div>
        </div>
    </aside>
    <div class="portal-workspace">
        <header class="portal-topbar">
            <div class="d-flex align-items-center gap-3"><button class="sidebar-toggle d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#portalSidebar" aria-controls="portalSidebar" aria-label="Buka navigasi"><i class="bi bi-list"></i></button><span class="topbar-label">Portal internal · Satgas PPKS FSH</span></div>
            <div class="topbar-actions"><a class="btn btn-sm btn-outline-secondary d-none d-sm-inline-flex" href="{{ url('/') }}"><i class="bi bi-globe2 me-1"></i>Portal Publik</a><div class="user-pill"><span class="user-avatar"><i class="bi bi-person"></i></span><span class="user-name d-block">{{ auth()->user()->name }}</span></div></div>
        </header>
        <main class="internal-main">
            <header class="page-intro"><div><div class="page-kicker">{{ str_replace('_',' ',ucfirst($role)) }}</div><h1 class="page-title">@yield('heading','Dashboard')</h1></div></header>
            @if(session('success'))<div class="alert alert-success border-0 shadow-sm">{{ session('success') }}</div>@endif
            @if($errors->any())<div class="alert alert-danger border-0 shadow-sm">{{ $errors->first() }}</div>@endif
            @yield('content')
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
