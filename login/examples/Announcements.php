
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Classroom
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./Classroom.php">
              <i class="material-icons">dashboard</i>
              <p>Classroom</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./Profile.php">
              <i class="material-icons">person</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./Assignments.php">
              <i class="material-icons">content_paste</i>
              <p>Assignments</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="./Notes.php">
              <i class="material-icons">library_books</i>
              <p>Notes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./Announcements.php">
              <i class="material-icons">library_books</i>
              <p>Announcements</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"></a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
             <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="material-icons">person</i></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a href="../../logout.php" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Announcements </h4>
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="row">
                  <div class="tim-typo">
                    <h1>
                      <span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
                  </div>
                  <div class="tim-typo">
                    <h2>
                      <span class="tim-note">Header 2</span>The Life of Material Dashboard</h2>
                  </div>
                  <div class="tim-typo">
                    <h3>
                      <span class="tim-note">Header 3</span>The Life of Material Dashboard</h3>
                  </div>
                  <div class="tim-typo">
                    <h4>
                      <span class="tim-note">Header 4</span>The Life of Material Dashboard</h4>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Header 5</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h6>
                      <span class="tim-note">Header 6</span>The Life of Material Dashboard</h6>
                  </div>
                  <div class="tim-typo">
                    <p>
                      <span class="tim-note">Paragraph</span>
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that???s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Quote</span>
                    <blockquote class="blockquote">
                      <p>
                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that???s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                      </p>
                      <small>
                        Kanye West, Musician
                      </small>
                    </blockquote>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Muted Text</span>
                    <p class="text-muted">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Primary Text</span>
                    <p class="text-primary">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Info Text</span>
                    <p class="text-info">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Success Text</span>
                    <p class="text-success">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Warning Text</span>
                    <p class="text-warning">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Danger Text</span>
                    <p class="text-danger">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <h2>
                      <span class="tim-note">Small Tag</span>
                      Header with small subtitle
                      <br>
                      <small>Use "small" tag for the headers</small>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
     
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>