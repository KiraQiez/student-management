<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CampusOne Dashboard</title>

  <!-- External styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/mainstyles.css') }}" />
</head>
<body>

  <!-- Sidebar -->
  <nav class="sidebar">
    <div class="sidebar-header">
      <img src="{{ asset('rsc/logo.png') }}" alt="Logo" class="logo" />
      <h4>CampusOne</h4>
    </div>
    <ul class="items-list">
      <li><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
      <li><a class="nav-link {{ request()->routeIs('course.*') ? 'active' : '' }}" href="{{ route('course.index') }}"><i class="fas fa-book"></i> Courses</a></li>
      <li><a class="nav-link {{ request()->routeIs('student.*') ? 'active' : '' }}" href="{{ route('student.index') }}"><i class="fas fa-users"></i> Students</a></li>
      <li><a class="nav-link {{ request()->routeIs('exam.*') ? 'active' : '' }}" href="{{ route('exam.index') }}"><i class="fas fa-clipboard-list"></i> Exams</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div class="main-content">

    <!-- Top Navbar -->
    <nav class="top-navbar d-flex justify-content-between align-items-center px-4">
      <div class="search-bar">
        <input type="text" class="form-control" placeholder="Search..." />
      </div>
      <div class="profile-section d-flex align-items-center">
        <i class="fas fa-bell me-4" style="font-size: 18px; color: var(--text-color);"></i>
        <div class="profile d-flex align-items-center">
          <img src="https://via.placeholder.com/32" alt="Profile" class="profile-img" />
          <span class="ms-2">John Doe</span>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid py-4">
      {{ $slot }}
    </div>
  </div>

</body>
</html>
