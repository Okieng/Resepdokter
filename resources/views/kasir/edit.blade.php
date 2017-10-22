<div class="container">
<form action="/kasir/{{$kasir->id_kasir}}" method="POST">
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
                  <label>nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="nama" value="{{$kasir -> nama}}">
              </div>
              <div class="form-group">
                  <label>alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="alamat" value="{{$kasir -> alamat}}">
              </div>
              <div class="form-group">
                  <label>telepon</label>
                  <input type="text" class="form-control" name="telepon" placeholder="telepon" value="{{$kasir -> telepon}}">
              </div>
              <div class="form-group">
                  <label>status</label>
                  <input type="text" class="form-control" name="status" placeholder="status" value="{{$kasir -> status}}">
              </div>
              <div class="form-group">
                  <label>username</label>
                  <input type="text" class="form-control" name="username" placeholder="username" value="{{$kasir -> username}}">
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control" name="password" placeholder="password" value="{{$kasir -> password}}">
              </div>
              <div class="form-group">
                  <label>akses</label>
                  <input type="text" class="form-control" name="akses" placeholder="akses" value="{{$kasir -> akses}}">
              </div>
             <input type="hidden" name="_token" value="{{csrf_token()}}">
             <input type="hidden" name="_method" value="put">
              <input class="btn btn-success" type="submit" value="Submit">

</form>
</div>