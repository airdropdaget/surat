
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Permasalahan V.2.0</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_navbar.php -->
    @include('layout.header')

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.php -->
        @include('layout.menu')

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Charts</h3>
          <div class="row">
            <div class="col-md-12 mb-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Provinsi Kasus</h5>
                  <div class="row">
                    @foreach
                   
                    $results1 = DB::select('SELECT provinsi,count(*) as totalcount from kasus group by provinsi');dd($results1);
                    $labels = $suspects->flatten(1)->pluck('provinsi');
                    $data   = $suspects->flatten(1)->pluck('totalcount');
                    

                    <div class="col-12">
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2"></p>{{$result1->provinsi}}</p>{{$result1->totalcount}} Kasus
                        <div class="progress progress-slim">
                          <div class="" role="progressbar" style="width: %" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                 @endforeach
                    <div class="col-12">
                      <p class="text-muted mb-0">
                       
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../../partials/_footer.php --> 
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
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="js/chart.js"></script>
  <script src=".js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
</body>

</html>
