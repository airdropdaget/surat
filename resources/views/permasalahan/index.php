<?php
session_start();
error_reporting(0);
include "koneksi.php";
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
        # code...
   }
//cek level user
if($_SESSION['hak']!="admin"){
    die("Anda Belum Login");//jika bukan admin jangan lanjut
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Permasalahan V.2.0</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
     
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.php -->
        
        <?php include "menu.php"; ?>
        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Dashboard</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-danger">
                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Total Permasalahan</p>
                      <?php
                    $tampil=mysqli_query($koneksi,"SELECT * FROM kasus");
                    $total1=mysqli_num_rows($tampil);
                    ?>
                      <h4 class="bold-text"><?php echo "$total1"; ?></h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 65% lower growth
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-warning">
                        <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Orders</p>
                      <h4 class="bold-text">656</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-success">
                        <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Revenue</p>
                      <h4 class="bold-text">$65656</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-primary">
                        <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Followers</p>
                      <h4 class="bold-text">+62,500</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-5 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Provinsi Kasus</h5>
                  <div class="row">
                    <?php
                    $tampil=mysqli_query($koneksi,"SELECT provinsi, COUNT(provinsi) AS jumlah FROM kasus GROUP BY provinsi");
                    while($data = mysqli_fetch_array($tampil)){
                      if ($data['jumlah']<10) {
                        $class="progress-bar bg-primary";
                      }elseif($data['jumlah']>10 && $data['jumlah']<=14){
                        $class="progress-bar bg-warning";
                      }elseif($data['jumlah']>14){
                        $class="progress-bar bg-danger";
                      }else{

                      }

                      if ($data['jumlah']<10) {
                        $class1="25";
                      }elseif($data['jumlah']>10 && $data['jumlah']<=14){
                        $class1="50";
                      }elseif($data['jumlah']>14){
                        $class1="75";
                      }else{

                      }
                      ?>

                    <div class="col-12">
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2"><?php echo $data['provinsi'];?></p><?php echo $data['jumlah']; ?> Kasus
                        <div class="progress progress-slim">
                          <div class="<?php echo $class;?>" role="progressbar" style="width: <?php echo $class1;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                    <div class="col-12">
                      <p class="text-muted mb-0">
                       
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Total Sales</h5>
                  <div class="custom-legend-container w-75 mx-auto">
                    <canvas id="sales-chart"></canvas>
                  </div>
                  <div id="sales-chart-legend" class="legend-right"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sales region</h5>
                  <div class="table-responsive table-sales">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">
                            Country
                          </th>
                          <th class="text-right">
                            Sales
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="flag">
                              <i class="flag-icon flag-icon-us"></i>
                            </div>
                          </td>
                          <td>USA</td>
                          <td class="text-right">
                            2.920
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="flag">
                              <i class="flag-icon flag-icon-in"></i>
                            </div>
                          </td>
                          <td>India</td>
                          <td class="text-right">
                            8.265
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="flag">
                              <i class="flag-icon flag-icon-id"></i>
                            </div>
                          </td>
                          <td>Indonesia</td>
                          <td class="text-right">
                            787
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="flag">
                              <i class="flag-icon flag-icon-gb"></i>
                            </div>
                          </td>
                          <td>United Kingdom</td>
                          <td class="text-right">
                            690
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="flag">
                              <i class="flag-icon flag-icon-ro"></i>
                            </div>
                          </td>
                          <td>Romania</td>
                          <td class="text-right">
                            600
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="flag">
                              <i class="flag-icon flag-icon-br"></i>
                            </div>
                          </td>
                          <td>Brasil</td>
                          <td class="text-right">
                            550
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-deck">
            <div class="card col-lg-12 px-0 mb-4">
              <div class="card-body">
                <h5 class="card-title">Last Billings</h5>
                <div class="table-responsive">
                  <table class="table center-aligned-table">
                    <thead>
                      <tr class="text-primary">
                        <th>Order No</th>
                        <th>Product Name</th>
                        <th>Purchased On</th>
                        <th>Shipping Status</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                        <td>034</td>
                        <td>Iphone 7</td>
                        <td>12 May 2017</td>
                        <td>Dispatched</td>
                        <td>Credit card</td>
                        <td><label class="badge badge-success">Approved</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                      <tr class="">
                        <td>035</td>
                        <td>Galaxy S8</td>
                        <td>15 May 2017</td>
                        <td>Dispatched</td>
                        <td>Internet banking</td>
                        <td><label class="badge badge-warning">Pending</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                      <tr class="">
                        <td>036</td>
                        <td>Amazon Echo</td>
                        <td>17 May 2017</td>
                        <td>Dispatched</td>
                        <td>Credit card</td>
                        <td><label class="badge badge-success">Approved</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                      <tr class="">
                        <td>037</td>
                        <td>Google Pixel</td>
                        <td>17 May 2017</td>
                        <td>Dispatched</td>
                        <td>Cash on delivery</td>
                        <td><label class="badge badge-danger">Rejected</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                      <tr class="">
                        <td>038</td>
                        <td>Mac Mini</td>
                        <td>19 May 2017</td>
                        <td>Dispatched</td>
                        <td>Debit card</td>
                        <td><label class="badge badge-success">Approved</label></td>
                        <td><a href="#" class="btn btn-outline-success btn-sm">View Order</a></td>
                        <td><a href="#" class="btn btn-outline-warning btn-sm">Cancel</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/maps.js"></script>
</body>

</html>
