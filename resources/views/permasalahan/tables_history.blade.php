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
                        <th style="color: #FFFFFF">Provinsi</th>
                        <th style="color: #FFFFFF">Kabupaten</th>
                        <th style="color: #FFFFFF">Kasus</th>
                        <th style="color: #FFFFFF">Ringkasan</th>
                        <th style="color: #FFFFFF">Tindak Lanjut</th>
                        <th style="color: #FFFFFF">Hambatan</th>
                        <th style="color: #FFFFFF">Pembuat</th>
                        <th style="color: #FFFFFF">Update</th>
                        <th style="color: #FFFFFF">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php $no = 1; @endphp
                          @foreach($kasus as $kasus)
                          <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $kasus->provinsi }}</td>
                          <td>{{ $kasus->kabupaten }}</td>
                          <td>{{ $kasus->kasus}}</td>
                          <td>{{ substr($kasus->ringkasan, 0, 20)}}</td>
                          <td>{{ substr($kasus->tindak, 0, 20)}}</td>
                          <td>{{ substr($kasus->hambatan, 0, 20)}}</td>
                          <td>{{ $kasus->pembuat}}</td>
                          <td>{{ $kasus->updates }}</td>
                          <td>
                          <a href="{{url('/show',$kasus->id_kasus)}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary">History</a>
                          </td>
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
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
      <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              </div>
              <div class="modal-body">
              </div>
              <div class="modal-footer">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

</html>s