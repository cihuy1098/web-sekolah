@extends('layout.app')

@section('title', 'Detail Siwa')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-outline card-info shadow-sm mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">
                        <i class="bi bi-person-badge-fill me-1"></i>
                    </h3>
                    <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> kembali
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="text-center mb-4">
                    <div class="bg-primary-subtle text-primary rounded-circle d-innlene-flex align-items-center justify-content-center shadow-sm" style="width: 100px; height: 100px;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
