<?php
session_start()
?>
<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
     }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 10px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #495057;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="text-center mb-4">
          <h4 class="text-white">Admin Panel</h4>
        </div>
        <a href="#">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Settings</a>
        <a href="#">Reports</a>
        <a href="#">Logout</a>
      </nav>

      <!-- Main Content -->
      <main class="col-md-10 ms-sm-auto px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <!-- Example Content Cards -->
        <div class="row">
          <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
              <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text">120</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-bg-success mb-3">
              <div class="card-body">
                <h5 class="card-title">Active Sessions</h5>
                <p class="card-text">45</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
              <div class="card-body">
                <h5 class="card-title">Pending Reports</h5>
                <p class="card-text">8</p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

</body>
</html>
