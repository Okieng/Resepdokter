<div class="container">
<form action="/kasir" method="POST">
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
                  <input type="text" class="form-control" name="nama" placeholder="nama_distributor">
              </div>
              <div class="form-group">
                  <label>alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="alamat">
              </div>
              <div class="form-group">
                  <label>telepon</label>
                  <input type="number" class="form-control" name="telepon" placeholder="telepon">
              </div>
              <div class="form-group">
                  <label>status</label>
                  <input type="text" class="form-control" name="status" placeholder="status">
              </div>
              <div class="form-group">
                  <label>username</label>
                  <input type="text" class="form-control" name="username" placeholder="username">
              </div>
              <div class="form-group">
                  <label>password</label>
                  <input type="password" class="form-control" name="password" placeholder="password">
              </div>
              <div class="form-group">
                  <label>akses</label>
                  <select name="akses">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>
</div>