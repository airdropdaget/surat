<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title">History Penyuntingan</h4>
</div>
  
<div class="modal-body">
 
        <table class="table table-striped table-bordered small" width="700px">
        <tr  style="background-color: #00BFFF;">    
        <th width="300px" style="color: #FFFFFF">Ringkasan</th>
        <th width="200px" style="color: #FFFFFF">Tindak</th>
        <th width="100px" style="color: #FFFFFF">Hambatan</th>
        <th width="100px" style="color: #FFFFFF">Update</th>
        </tr>
        @foreach($history as $kasus)
        <tr>
        <td>{{$kasus->history}}</td>
        <td>{{$kasus->history2}}</td>
        <td>{{$kasus->history3}}</td>
        <td>{{$kasus->rubah}}</td>
        </tr>  
        @endforeach
        </table>
      
</div>
  
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
</div>