<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Permasalahan V.2.0</title>
  <link rel="stylesheet" href="{{('node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{('css/style.css')}}" />
  <link rel="shortcut icon" href="images/favicon.png')}}" />
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
          <h3 class="page-heading mb-4">Forms</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">DETAIL KASUS</h5>
                  <form class="forms-sample" action="edit-kasus.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_kasus" value="<?php echo $data['id_kasus']; ?>">
                             <input type="hidden" name="tanggal" value="<?php echo $data['tanggal']; ?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Provinsi</label>
                      
                      <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="<?php echo $data['provinsi']; ?>" disabled>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kabupaten</label>
                      
                      <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" disabled value="<?php echo $data['kabupaten']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Kasus</label>
                      <textarea class="form-control" name="kasus" rows="5" placeholder="Isi kasus" disabled><?php echo $data['kasus']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Ringkasan</label>
                       <textarea class="form-control" name="ringkasan" rows="9" placeholder="isi ringkasan" disabled><?php echo $data['ringkasan']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Tindak Lanjut</label>
                     <textarea class="form-control" name="tindak" rows="9" placeholder="Isi tindak lanjut" disabled><?php echo $data['tindak']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Hambatan</label>
                       <textarea class="form-control" name="hambatan" rows="9" placeholder="Isi hambatan" disabled><?php echo $data['hambatan']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">PIC</label>
                     <input type="text" name="pic" class="form-control" placeholder="Person in Charge" disabled value="<?php echo $data['pic']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Pembuat</label>
                       <input type="text" name="pembuat" class="form-control" placeholder="Pembuat" disabled value="<?php echo $data['pembuat']; ?>">
                    </div>
                    
                  </form>
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

  <script src="{{('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{('s/off-canvas.js')}}"></script>
  <script src="{{('js/hoverable-collapse.js')}}"></script>
  <script src="{{('js/misc.js')}}"></script>
</body>

</html>
