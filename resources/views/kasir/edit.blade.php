<div class="container">
<form action="/buku" method="POST">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            
              <div class="form-group">
                  <label>judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="judul" value="{{$buku -> judul}}">
              </div>
              <div class="form-group">
                  <label>noisbn</label>
                  <input type="text" class="form-control" name="noisbn" placeholder="noisbn" value="{{$buku -> noisbn}}">
              </div>
              <div class="form-group">
                  <label>penulis</label>
                  <input type="text" class="form-control" name="penulis" placeholder="penulis" value="{{$buku -> penulis}}">
              </div>
              <div class="form-group">
                  <label>penerbit</label>
                  <input type="text" class="form-control" name="penerbit" placeholder="penerbit" value="{{$buku -> penerbit}}">
              </div>
              <div class="form-group">
                  <label>tahun</label>
                  <input type="text" class="form-control" name="tahun" placeholder="tahun" value="{{$buku -> tahun}}">
              </div>
              <div class="form-group">
                  <label>stok</label>
                  <input type="text" class="form-control" name="stok" placeholder="stok" value="{{$buku -> stok}}">
              </div>
              <div class="form-group">
                  <label>harga_pokok</label>
                  <input type="text" class="form-control" name="harga_pokok" placeholder="harga_pokok" value="{{$buku -> harga_pokok}}">
              </div>
              <div class="form-group">
                  <label>harga_jual</label>
                  <input type="text" class="form-control" name="harga_jual" placeholder="harga_jual" value="{{$buku -> harga_jual}}">
              </div>
              <div class="form-group">
                  <label>ppn</label>
                  <input type="text" class="form-control" name="ppn" placeholder="ppn" value="{{$buku -> ppn}}">
              </div>
              <div class="form-group">
                  <label>diskon</label>
                  <input type="text" class="form-control" name="diskon" placeholder="diskon" value="{{$buku -> diskon}}">
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>
</div>