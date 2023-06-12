<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>EMIS - Admin Dashboard</title>
  <style>
    .navbar-dark .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.75);
    }

    .navbar-dark .navbar-nav .nav-link:hover {
      color: rgba(255, 255, 255, 1);
    }

    .sidebar {
      background-color: #343a40;
      color: #ffffff;
      height: 100vh;
    }

    .sidebar .list-group-item {
      background-color: transparent;
      border: none;
    }

    .sidebar .list-group-item:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .content {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">EMIS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Students
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Teachers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Courses
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Settings
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 content">
        <div class="d-flex justify-content-between flex
