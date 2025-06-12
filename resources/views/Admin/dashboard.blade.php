@extends('template.layout')

@section('title', 'Dashboard Admin')

@section('main')
<div id="layoutSidenav">
    <!-- Sidebar -->
    <div id="layoutSidenav_nav">
        @include('template.sidebar_admin')
    </div>
    @endsection
   
    <!-- Content -->
    <div id="layoutSidenav_content" style="padding-left: 20%;">
        <main>
            <div class="container-fluid px-4">
                <!-- Header Section --> 
                <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                    <h1 class="mb-0">Dashboard</h1>
                    <div class="text-muted">Last updated: {{ now()->format('d M Y') }}</div>
                </div>

                <!-- Rest of your dashboard content remains the same -->
                <!-- Welcome Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body bg-primary bg-opacity-10 rounded-3">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="card-title">Welcome back, Admin!</h2>
                                <p class="card-text text-muted">Here's what's happening with your platform today.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/921/921276.png" width="120" alt="Admin Logo" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0 text-muted">Total Pengguna</h5>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">
                                        <i class="fas fa-users"></i>
                                    </span>
                                </div>
                                <h2 class="fw-bold">200</h2>
                                <p class="text-success small mb-0">
                                    <i class="fas fa-arrow-up"></i> 5.2% from last month
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0 text-muted">Total Materi</h5>
                                    <span class="badge bg-success bg-opacity-10 text-success">
                                        <i class="fas fa-book"></i>
                                    </span>
                                </div>
                                <h2 class="fw-bold">10</h2>
                                <p class="text-success small mb-0">
                                    <i class="fas fa-arrow-up"></i> 2 new this week
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0 text-muted">Total Tugas</h5>
                                    <span class="badge bg-warning bg-opacity-10 text-warning">
                                        <i class="fas fa-tasks"></i>
                                    </span>
                                </div>
                                <h2 class="fw-bold">15</h2>
                                <p class="text-muted small mb-0">
                                    <i class="fas fa-circle"></i> 3 active assignments
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Content Section -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-white border-0">
                                <h5 class="mb-0">Recent Activity</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@push('styles')
<style>
    /* Main layout structure */
    #layoutSidenav {
        display: flex;
    }
    
    #layoutSidenav_nav {
        width: 225px;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1038;
        overflow-x: hidden;
        transition: all 0.15s;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(33, 40, 50, 0.15);
    }
    
    #layoutSidenav_content {
        margin-left: 225px;
        position: relative;     
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        transition: all 0.15s;
        width: calc(100% - 225px);
    }
    
    /* Card styling */
    .card {
        transition: transform 0.2s ease-in-out;
        border-radius: 0.35rem;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    .card-header {
        border-bottom: 1px solid rgba(0,0,0,0.05);
        background-color: #f8f9fc;
    }
    .badge {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50% !important;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        #layoutSidenav_nav {
            width: 0;
        }
        #layoutSidenav_content {
            margin-left: 0;
            width: 100%;
        }
    }
</style>
@endpush