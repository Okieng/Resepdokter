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
                  <input type="text" class="form-control" name="judul" placeholder="judul">
              </div>
              <div class="form-group">
                  <label>noisbn</label>
                  <input type="text" class="form-control" name="noisbn" placeholder="noisbn">
              </div>
              <div class="form-group">
                  <label>penulis</label>
                  <input type="text" class="form-control" name="penulis" placeholder="penulis">
              </div>
              <div class="form-group">
                  <label>penerbit</label>
                  <input type="text" class="form-control" name="penerbit" placeholder="penerbit">
              </div>
              <div class="form-group">
                  <label>tahun</label>
                  <input type="text" class="form-control" name="tahun" placeholder="tahun">
              </div>
              <div class="form-group">
                  <label>stok</label>
                  <input type="text" class="form-control" name="stok" placeholder="stok">
              </div>
              <div class="form-group">
                  <label>harga_pokok</label>
                  <input type="text" class="form-control" name="harga_pokok" placeholder="harga_pokok">
              </div>
              <div class="form-group">
                  <label>harga_jual</label>
                  <input type="text" class="form-control" name="harga_jual" placeholder="harga_jual">
              </div>
              <div class="form-group">
                  <label>ppn</label>
                  <input type="text" class="form-control" name="ppn" placeholder="ppn">
              </div>
              <div class="form-group">
                  <label>diskon</label>
                  <input type="text" class="form-control" name="diskon" placeholder="diskon">
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>
</div>