<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Permasalahan V.2.0</title>
  <link rel="stylesheet" href="{{url('node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{url('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{url('css/style.css')}}" />
  <link rel="shortcut icon" href="{{url('images/favicon.png')}}" />

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
                  <h5 class="card-title mb-4">EDIT KASUS</h5>
                  @foreach($kasus as $kasus)
                    <form class="forms-sample" action="{{url('/update')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$kasus->id_kasus}}">
                             <input type="hidden" name="tanggal" value="{{$kasus->tanggal}}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Provinsi</label>
                      <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="{{$kasus->provinsi}}" required="" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kabupaten</label>
                      <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" required="" value="{{$kasus->kabupaten}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Kasus</label>
                      <textarea class="form-control" name="kasus" rows="5" placeholder="Isi kasus" required="">{{$kasus->kasus}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Ringkasan</label>
                       <textarea class="form-control" name="ringkasan" rows="5" placeholder="isi ringkasan" required="">{{$kasus->ringkasan}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Tindak Lanjut</label>
                     <textarea class="form-control" name="tindak" rows="5" placeholder="Isi tindak lanjut" required="">{{$kasus->tindak}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Hambatan</label>
                       <textarea class="form-control" name="hambatan" rows="5" placeholder="Isi hambatan" required="">{{$kasus->hambatan}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">PIC</label>
                     <input type="text" name="pic" class="form-control" placeholder="Person in Charge" required="" value="{{$kasus->pic}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea">Pembuat</label>
                       <input type="text" name="pembuat" class="form-control" placeholder="Pembuat" required="" value="{{$kasus->pembuat}}">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  @endforeach
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

  <script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{url('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{url('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{url('js/off-canvas.js')}}"></script>
  <script src="{{url('js/hoverable-collapse.js')}}"></script>
  <script src="{{url('js/misc.js')}}"></script>
</body>

</html>
