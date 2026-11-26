@extends('layouts.internal')
@section('title','Profil Saya')
@section('heading','Profil Saya')
@section('content')<div class="card p-4" style="max-width:640px"><div class="mb-3"><div class="small muted">Nama</div><div class="fw-semibold">{{ $user->name }}</div></div><div class="mb-3"><div class="small muted">Email</div><div class="fw-semibold">{{ $user->email }}</div></div><div class="mb-3"><div class="small muted">Role</div><div class="fw-semibold">{{ str_replace('_',' ',ucfirst($user->role)) }}</div></div><div><div class="small muted">Status akun</div><span class="badge {{ $user->is_active?'text-bg-success':'text-bg-secondary' }}">{{ $user->is_active?'Aktif':'Nonaktif' }}</span></div></div>@endsection
