<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Ministry Project</title>

  <!-- Google Font: Source Sans Pro -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
  />
  <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}" />
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" />
  
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"
          ><i class="fas fa-bars"></i
          ></a>
        </li>
        <li class="nav-item">
          <a href="{{route('home.home')}}" class="nav-link active">
            <p>होम</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('home.action-plan')}}" class="nav-link">
            <p>कार्य योजना</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('home.action-progress')}}" class="nav-link">
            <p>कार्य प्रगति</p>
          </a>
        </li>
      </ul>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a
          class="nav-link"
          data-widget="navbar-search"
          href="#"
          role="button"
        >
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input
                class="form-control form-control-navbar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button
                  class="btn btn-navbar"
                  type="button"
                  data-widget="navbar-search"
                >
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img
                src="{{ asset('img/user1-128x128.jpg') }}"
                alt="User Avatar"
                class="img-size-50 mr-3 img-circle"
              />
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"
                  ><i class="fas fa-star"></i
                  ></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted">
                  <i class="far fa-clock mr-1"></i> 4 Hours Ago
                </p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img
                src="{{ asset('img/user8-128x128.jpg') }}"
                alt="User Avatar"
                class="img-size-50 img-circle mr-3"
              />
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"
                  ><i class="fas fa-star"></i
                  ></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted">
                  <i class="far fa-clock mr-1"></i> 4 Hours Ago
                </p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img
                src="{{ asset('img/user3-128x128.jpg') }}"
                alt="User Avatar"
                class="img-size-50 img-circle mr-3"
              />
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"
                  ><i class="fas fa-star"></i
                  ></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted">
                  <i class="far fa-clock mr-1"></i> 4 Hours Ago
                </p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"
          >See All Messages</a
          >
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"
          >See All Notifications</a
          >
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-widget="control-sidebar"
          data-slide="true"
          href="#"
          role="button"
        >
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home.home')}}" class="brand-link d-flex align-items-center">
      <img
        src="{{ asset('img/AdminLTELogo.png') }}"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text small font-weight-light"
      >सुदूरपश्चिम प्रादेश सरकार</span
      >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home.home')}}" class="nav-link active">
              <i class="nav-icon fas fa-house-user"></i>
              <p>होम</p>
            </a>
          </li>
          <li class="nav-header">प्रोजेक्टहरू</li>
          <li class="nav-item">
            <a href="{{route('home.action-plan')}}" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>कार्य योजना</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('home.action-progress')}}" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>कार्य प्रगति</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Project List</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{route('home.home')}}">Home</a>
              </li>
              <li class="breadcrumb-item active">Project List</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="card">
          <div class="card-header border-0 mx-auto">
            <h3 class="card-title">सुदूर पश्चिम प्रादेश सरकार</h3>
          </div>
          <div
            class="card-body table-responsive d-flex flex-column justify-content-center"
          >
            <h2 id="toDoTitle" class="text-center mt-2 mb-4">
              कार्य योजना बनाउनु होस।
            </h2>

            <section class="content mb-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-9 mx-auto">
                    <div class="card card-primary">
                      <div class="card-body text-center p-0">
                        <h5 class="mt-3">पहिलो त्रैमासिक</h5>
                        <div class="card-body p-0">
                          <table class="table table-striped">
                            <thead>
                            <tr class="border-top">
                              <th style="width: 10px">#</th>
                              <th>Task</th>
                              <th>Feedback</th>
                            </tr>
                            </thead>
                            <tbody id="taskHolder">
                            <tr class="bg-success">
                              <td>
                                <i class="fa fa-check"></i>
                              </td>
                              <td>
                                <div type="button"
                                     data-toggle="modal"
                                     data-target="#modal-default">
                                  टिकापुर अस्पताल परिसरमा सरुवा रोग उपचार,
                                  नियन्त्रण तथा अनुसन्धान केन्द्र भवन
                                  निर्माण
                                </div>
                              </td>
                              <td><button type="button"
                                          data-toggle="modal"
                                          data-target="#modal-default" class="btn btn-primary mx-auto">
                                टिप्पणी हेर्नुहोस्
                              </button></td>
                            </tr>
                            <tr class="bg-success">
                              <td>
                                <i class="fa fa-check"></i>
                              </td>
                              <td>
                                <div type="button"
                                     data-toggle="modal"
                                     data-target="#modal-default">
                                  टिकापुर अस्पताल परिसरमा सरुवा रोग उपचार,
                                  नियन्त्रण तथा अनुसन्धान केन्द्र भवन
                                  निर्माण
                                </div>
                              </td>
                              <td><button type="button"
                                          data-toggle="modal"
                                          data-target="#modal-default" class="btn btn-primary mx-auto">
                                टिप्पणी हेर्नुहोस्
                              </button></td>
                            </tr>
                            <tr class="bg-danger">
                              <td>
                                <input
                                  type="checkbox"
                                  value=""
                                  id="check1"
                                />
                              </td>
                              <td>
                                <div type="button"
                                     data-toggle="modal"
                                     data-target="#modal-default">
                                  टिकापुर अस्पताल परिसरमा सरुवा रोग उपचार,
                                  नियन्त्रण तथा अनुसन्धान केन्द्र भवन
                                  निर्माण
                                </div>
                              </td>
                              <td>
                                <button type="button"
                                        data-toggle="modal"
                                        data-target="#modal-default" class="btn btn-primary mx-auto">
                                  टिप्पणी हेर्नुहोस्
                                </button>
                              </td>
                            </tr>
                            <tr class="bg-danger">
                              <td>
                                <input
                                  type="checkbox"
                                  value=""
                                  id="check1"
                                />
                              </td>
                              <td>
                                <div type="button"
                                     data-toggle="modal"
                                     data-target="#modal-default">
                                  टिकापुर अस्पताल परिसरमा सरुवा रोग उपचार,
                                  नियन्त्रण तथा अनुसन्धान केन्द्र भवन
                                  निर्माण
                                </div>
                              </td>
                              <td>
                                <button type="button"
                                        data-toggle="modal"
                                        data-target="#modal-default" class="btn btn-primary mx-auto">
                                  टिप्पणी हेर्नुहोस्
                                </button>
                              </td>
                            </tr>
                            <tr class="bg-danger">
                              <td>
                                <input
                                  type="checkbox"
                                  value=""
                                  id="check1"
                                />
                              </td>
                              <td>
                                <div type="button"
                                     data-toggle="modal"
                                     data-target="#modal-default">
                                  टिकापुर अस्पताल परिसरमा सरुवा रोग उपचार,
                                  नियन्त्रण तथा अनुसन्धान केन्द्र भवन
                                  निर्माण
                                </div>
                              </td>
                              <td>
                                <button type="button"
                                        data-toggle="modal"
                                        data-target="#modal-default" class="btn btn-primary mx-auto">
                                  टिप्पणी हेर्नुहोस्
                                </button>
                              </td>
                            </tr>
                            <tr class="bg-danger">
                              <td>
                                <input
                                  type="checkbox"
                                  value=""
                                  id="check1"
                                />
                              </td>
                              <td>
                                <div type="button"
                                     data-toggle="modal"
                                     data-target="#modal-default">
                                  टिकापुर अस्पताल परिसरमा सरुवा रोग उपचार,
                                  नियन्त्रण तथा अनुसन्धान केन्द्र भवन
                                  निर्माण
                                </div>
                               </td>
                              <td>
                                <button type="button"
                                        data-toggle="modal"
                                        data-target="#modal-default" class="btn btn-primary mx-auto">
                                  टिप्पणी हेर्नुहोस्
                                </button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Write your remarks here</h4>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                      onclick="resetComment()"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Main content -->
                    <div
                      id="textHolder"
                      class="card card-outline card-info p-2 mb-0"
                    >
                      <!-- /.card-header -->
                      <button
                        id="btnComment"
                        type="submit"
                        class="border-0 bg-transparent"
                        onclick="loadComment()"
                      >
                        Write a remark
                      </button>
                    </div>
                    <!-- /.content -->
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button
                      type="button"
                      class="btn btn-default"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-primary">
                      Save changes
                    </button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <button
              id="whoDoesIt"
              type="submit"
              class="btn btn-primary mx-auto"
              onclick="doerSubmit()"
            >
              पेश गर्नुहोस्
            </button>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid"></div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">Anything you want</div>
    <!-- Default to the left -->
    <strong
    >Copyright &copy; 2014-2021
      <a href="https://adminlte.io">AdminLTE.io</a>.</strong
    >
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}" ></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
<!-- AdminLTE App -->
  <script src="{{ asset('js/adminlte.min.js') }}" ></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>
<!-- CUSTOM SCRIPTS -->
<script>
  function doerSubmit() {
    window.location.href = "{{route('home.action-plan')}}";
  }

  function resetComment() {
    document.getElementById("btnComment").classList.remove("d-none");
    document.getElementById("summernote").classList.add("d-none");
  }

  let loadComment = (function () {
    var executed = false;

    return function () {
      if (!executed) {
        executed = true;

        document.getElementById("btnComment").classList.add("d-none");
        let textElement = document.createElement("textarea");
        textElement.id = "summernote";
        textElement.className = "m-2";

        let textValue = document.createElement("p");
        textValue.textContent = "Write a comment";

        textElement.appendChild(textValue);

        let textAdd = document.getElementById("textHolder");
        textAdd.appendChild(textElement);
      }
    };
  })();

  document
    .getElementById("btnComment")
    .addEventListener("click", function () {
      document.getElementById("btnComment").classList.add("d-none");
      document.getElementById("summernote").classList.remove("d-none");
    });
</script>
</body>
</html>
