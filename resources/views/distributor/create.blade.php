<div class="container">
<form action="/distributor" method="POST">
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
                  <label>nama_distributor</label>
                  <input type="text" class="form-control" name="nama_distributor" placeholder="nama_distributor">
              </div>
              <div class="form-group">
                  <label>alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="alamat">
              </div>
              <div class="form-group">
                  <label>telepon</label>
                  <input type="number" class="form-control" name="telepon" placeholder="telepon">
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>
</div>