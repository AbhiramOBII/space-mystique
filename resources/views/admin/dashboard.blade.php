<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Space Mystique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1000;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 15px 20px;
            border-radius: 0;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .stats-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .stats-card .card-body {
            padding: 2rem;
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0;
        }
        .brand-title {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="p-4">
            <h4 class="text-white mb-0">Space Mystique</h4>
            <small class="text-white-50">Admin Panel</small>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
                    <i class="fas fa-cogs"></i>
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}" href="{{ route('admin.projects.index') }}">
                    <i class="fas fa-building"></i>
                    Projects
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#content">
                    <i class="fas fa-edit"></i>
                    Content Management
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gallery">
                    <i class="fas fa-images"></i>
                    Gallery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#users">
                    <i class="fas fa-users"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#settings">
                    <i class="fas fa-cog"></i>
                    Settings
                </a>
            </li>
        </ul>
        <div class="mt-auto p-4">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm w-100">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <h1 class="brand-title mb-0">Dashboard</h1>
                <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-2"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#profile">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container-fluid">
            <!-- Welcome Message -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="alert alert-info border-0" style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);">
                        <h4 class="alert-heading">Welcome back, {{ Auth::user()->name }}!</h4>
                        <p class="mb-0">Manage your Space Mystique interior design website from this admin panel.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-3 mb-3">
                    <div class="card stats-card">
                        <div class="card-body text-center">
                            <i class="fas fa-building fa-2x mb-3"></i>
                            <h2 class="stats-number">12</h2>
                            <p class="mb-0">Active Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card stats-card">
                        <div class="card-body text-center">
                            <i class="fas fa-cogs fa-2x mb-3"></i>
                            <h2 class="stats-number">8</h2>
                            <p class="mb-0">Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card stats-card">
                        <div class="card-body text-center">
                            <i class="fas fa-images fa-2x mb-3"></i>
                            <h2 class="stats-number">156</h2>
                            <p class="mb-0">Gallery Images</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card stats-card">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-2x mb-3"></i>
                            <h2 class="stats-number">1</h2>
                            <p class="mb-0">Admin Users</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Quick Actions</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary w-100">
                                        <i class="fas fa-plus me-2"></i>
                                        Add New Project
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="{{ route('admin.services.create') }}" class="btn btn-outline-success w-100">
                                        <i class="fas fa-plus me-2"></i>
                                        Add New Service
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="#upload-images" class="btn btn-outline-info w-100">
                                        <i class="fas fa-upload me-2"></i>
                                        Upload Images
                                    </a>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <a href="#site-settings" class="btn btn-outline-warning w-100">
                                        <i class="fas fa-cog me-2"></i>
                                        Site Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Recent Activity</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-user-plus text-success me-2"></i>
                                        Admin account created
                                    </div>
                                    <small class="text-muted">Just now</small>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-database text-info me-2"></i>
                                        Database migrations completed
                                    </div>
                                    <small class="text-muted">2 minutes ago</small>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-shield-alt text-primary me-2"></i>
                                        Admin authentication system setup
                                    </div>
                                    <small class="text-muted">5 minutes ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">System Status</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Database</span>
                                <span class="badge bg-success">Connected</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Authentication</span>
                                <span class="badge bg-success">Active</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Admin Panel</span>
                                <span class="badge bg-success">Online</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Laravel Version</span>
                                <span class="badge bg-info">12.x</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
