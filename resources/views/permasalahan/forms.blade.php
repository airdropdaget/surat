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
                  <h5 class="card-title mb-4">TAMBAH SURAT</h5>       
                  <form class="forms-sample" action="{{url('/simpan')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}} 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Pemohon</label>
                      <input type="text" name="pemohon" class="form-control" placeholder="Nama Pemohon" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">No Surat</label>
                      <input type="text" name="no" class="form-control" placeholder="Isi Nomer Surat" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Surat</label>
                      <input type="date" name="tgl" class="form-control" placeholder="Isi Tanggal Surat" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Link Surat</label>
                      <input type="text" name="link" class="form-control" placeholder="Link Google Drive" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">No Agenda</label>
                      <input type="text" name="agenda" class="form-control" placeholder="Isi No Agenda" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pengolah</label>
                        <select class="form-control" name="pengolah_dropdown" id="pengolah_dropdown" required="">
                            <option value="">--Pilih Pengolah--</option>
                            @foreach($pengolah as $item)
                            <option value="{{$item->hp}}">{{$item->nama}}</option>
                            @endforeach 
                        </select>
                        <input type="hidden" name="pengolah" id="pengolah">
                        <script>
                          document.getElementById('pengolah_dropdown').addEventListener('change', function() {
                              var selectedText = this.options[this.selectedIndex].text;
                              document.getElementById('pengolah').value = selectedText;
                          });
                          </script>

                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
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
  <script src="{{('js/off-canvas.js')}}"></script>
  <script src="{{('js/hoverable-collapse.js')}}"></script>
  <script src="{{('js/misc.js')}}"></script>
</body>

</html>