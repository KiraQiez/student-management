<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CampusOne Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>
<body>
  <!-- Navigation Sidebar -->
  <nav class="sidebar">
    <div class="sidebar-header">
      <h4>CampusOne</h4>
    </div>
    <ul class="items-list">
      <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="#"><i class="fas fa-book"></i> Courses</a></li>
      <li><a href="#"><i class="fas fa-users"></i> Students</a></li>
      <li><a href="#"><i class="fas fa-clipboard-list"></i> Exams</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container-fluid py-4">
      {{ $slot }}
    </div>
  </div>
</body>
</html>
