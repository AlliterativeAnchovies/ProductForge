<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Safe Let - Addresing Housing Problem</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Safe Let</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="login Menu">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Login Menu</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa fa-hotel"></i>
            <span class="nav-link-text">Tenant</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Landlord">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-home"></i>
            <span class="nav-link-text">Landlord</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Tenant Information</a>
            </li>
            <li>
              <a href="cards.html">Post New</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end
                of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can
                discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Available Places</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Landlord</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">
                <a href="tenant.html">Tenant</a>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> News Feed</div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="./images/studio.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">
                  <a href="#">David Miller</a>
                </h6>
                <p class="card-text small">These waves are looking pretty good today!
                  <a href="#">#surfsup</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="./images/onebedroom.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">
                  <a href="#">John Smith</a>
                </h6>
                <p class="card-text small">Another day at the office...
                  <a href="#">#workinghardorhardlyworking</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1">
                      <a href="#">Jessy Lucas</a>
                    </h6>Where did you get that camera?! I want one!
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 46 mins ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="./images/studio1.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">
                  <a href="#">Jeffery Wellings</a>
                </h6>
                <p class="card-text small">Nice shot from the skate park!
                  <a href="#">#kickflip</a>
                  <a href="#">#holdmybeer</a>
                  <a href="#">#igotthis</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <div class="card-footer small text-muted">Posted 1 hr ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="./images/studio2.jpg" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1">
                  <a href="#">David Miller</a>
                </h6>
                <p class="card-text small">It's hot, and I might be lost...
                  <a href="#">#niceBedRoom</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
          <!-- Example Notifications Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bell-o"></i> Feed Example</div>
            <div class="list-group list-group-flush small" id="cards">
              <div id="notificationsMadeDynamic">
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>David Miller</strong>posted a new article to
                      <strong>David Miller Website</strong>.
                      <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Samantha King</strong>sent you a new message!
                      <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Jeffery Wellings</strong>added a new photo to the album
                      <strong>Beach</strong>.
                      <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <i class="fa fa-code-fork"></i>
                      <strong>Monica Dennis</strong>forked the
                      <strong>startbootstrap-sb-admin</strong>repository on
                      <strong>GitHub</strong>.
                      <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Price</th>
                  <th>Location</th>
                  <th>Discription</th>
                  <th>Accomodation Type</th>
                  <th>First time renter?</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Full Name</th>
                  <th>Price</th>
                  <th>Location</th>
                  <th>Discription</th>
                  <th>Accomodation Type</th>
                  <th>First time renter?</th>
                </tr>
              </tfoot>
              <tbody class="tableDisplayFromSQL">
                <tr>
                  <td>Ashton Cox</td>
                  <td>£150</td>
                  <td>Aberdeen</td>
                  <td>this will be the bio of the person</td>
                  <td>Studio</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>£200</td>
                  <td>Glasgow</td>
                  <td>this will be the bio of the person</td>
                  <td>One bedroom</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>£100</td>
                  <td>Edinburgh</td>
                  <td>this will be the bio of the person</td>
                  <td>Studio</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>cornard Clibes</td>
                  <td>£100</td>
                  <td>Ayr</td>
                  <td>this will be the bio of the person</td>
                  <td>Two bedroom</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td>Susan Summer</td>
                  <td>£250</td>
                  <td>Manchester</td>
                  <td>this will be the bio of the person</td>
                  <td>Studio</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Lio Livinstine</td>
                  <td>£170</td>
                  <td>Edinburgh</td>
                  <td>this will be the bio of the person</td>
                  <td>Studio</td>
                  <td>Yes</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <!-- <script src="js/sb-admin-charts.min.js"></script> -->
    <script> 
    	var time_temp = 1;
    	var notificationArray = [
          `
            <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>David Miller</strong>posted a new article to
                      <strong>David Miller Website</strong>.
                      <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                    </div>
                  </div>
                </a>
                `,
          `
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Samantha King</strong>sent you a new message!
                      <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                `,
          `<a class="list-group-item list-group-item-action" href="#">
              <div class="media">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Jeffery Wellings</strong>added a new photo to the album
                      <strong>Beach</strong>.
                      <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                  </div>
                  </div>
                </a>`,
          `
                <a class="list-group-item list-group-item-action" href="#">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <i class="fa fa-code-fork"></i>
                      <strong>Monica Dennis</strong>forked the
                      <strong>startbootstrap-sb-admin</strong>repository on
                      <strong>GitHub</strong>.
                      <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                    </div>
                  </div>
                </a>
                `
        ];
    	function glagleforge() {
          	var tobeinnerHTML = [];
          	thingamajig = document.getElementById("notificationsMadeDynamic");
            for (var i = 0;i<notificationArray.length;i++) {
            	tobeinnerHTML[i] = notificationArray[(i+time_temp)%notificationArray.length];
            }
            console.log(time_temp);
            time_temp++;
            thingamajig.innerHTML = tobeinnerHTML[0]+tobeinnerHTML[1]+tobeinnerHTML[2]+tobeinnerHTML[3];
          }
    var thingamajig;
      function showDiv() {
        //$("#cards").hide(0).delay(2000).show(0);
        
          setInterval(glagleforge, 5000);
      };
      showDiv();
    </script>
    <script src="js/loadTableDatas.js"></script>
  </div>
</body>

</html>