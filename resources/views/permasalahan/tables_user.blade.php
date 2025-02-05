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
  <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
          <h3 class="page-heading mb-4">Bootstrap Tables</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Advanced Table</h5>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example1" border="1">
                      <thead>
                        <tr class="text-primary" style="background-color: #00BFFF;">
                        <th style="color: #FFFFFF">No</th>
                        <th style="color: #FFFFFF">Nama</th>
                        <th style="color: #FFFFFF">Email</th>
                        <th style="color: #FFFFFF">Password</th>
                        
                        <th style="color: #FFFFFF">Akun di Buat</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php $no = 1; @endphp
                          @foreach($users as $user)
                          <tr>
                          <td>{{$no++}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->password}}</td>
                          
                          <td>{{$user->created_at}}</td>
                          </tr>
                          @endforeach 
                      </tbody>
                    </table>
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
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/dataTables/jquery.dataTables.js"></script>
  <script src="js/dataTables/dataTables.bootstrap.js"></script>
  <script>
    $(document).ready(function () {
    $('#dataTables-example1').dataTable();
    });
            
  </script>
</body>

</html>
