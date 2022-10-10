<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/imanecom.ico">

  <title>Imane Com Dashboard</title> 

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->

  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

</head>


<body class="g-sidenav-show  bg-gray-100">

  <main class="main-content border-radius-lg ">
    <div class="row" style="justify-content: center;">
      <div class="col-xl-3 col-sm-6 mt-8 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">calendar_month</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-lg-start mb-0 mt-5 text-capitalize">Années Expériences</p>
              <h4 class="mb-0">+10</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mt-8 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2 ">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">people</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-lg-start mb-0 mt-5 text-capitalize">Members</p>
              <h4 class="mb-0">2,300</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mt-8 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">done</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-lg-start mb-0 mt-5 text-capitalize">Projets Terminés</p>
              <h4 class="mb-0">3,462</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mt-8 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2 ">
            <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">sentiment_satisfied</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-lg-start mb-0 mt-5 text-capitalize">Client Satisfait</p>
              <h4 class="mb-0">3,462</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <a class="btn bg-gradient-primary shadow-success w-100" href="#" type="button">Modifier</a>
          </div>
        </div>
      </div>
    </div>



  </main>



  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->

        <!-- Sidenav Type -->

        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>

        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>

        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>


        <!-- Navbar Fixed -->

        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>



        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">

        </div>
      </div>
    </div>
  </div>


















  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>









































































  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>


  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>