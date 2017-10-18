	
					  <table border="2">
					  	<tr>
					  		<th>id buku</th>
					  		<th>judul</th>
					  		<th>noisbn</th>
					  		<th>penulis</th>
					  		<th>penerbit</th>
					  		<th>tahun</th>
					  		<th>stok</th>
					  		<th>harga_pokok</th>
					  		<th>harga_jual</th>
					  		<th>ppn</th>
					  		<th>diskon</th>
					  		<th>edit</th>
					  		<th>delete</th>
					  	</tr>
					  	</table>
	@foreach ($buku as $data)
					  	<table border="1">
						<tr>
                            <td>{{$data -> id_buku}}</td>
                            <td><a href="/buku/{{$data -> id_buku}}">{{$data -> judul}}</a></td>
                            <td>{{$data -> noisbn}}</td>
                            <td>{{$data -> penulis}}</td>
                            <td>{{$data -> penerbit}}</td>
                            <td>{{$data -> tahun}}</td>
                            <td>{{$data -> stok}}</td>
                            <td>{{$data -> harga_pokok}}</td>
                            <td>{{$data -> harga_jual}}</td>
                            <td>{{$data -> ppn}}</td>
                            <td>{{$data -> diskon}}</td>
                            <td>
								 <button type="submit" class="btn btn-default btn-xs btn-danger" value="edit"><i class="fa fa-times"></i><a href="/buku/{{$data->id_buku}}/edit">Edit</a></button>
	           				   
                            </td>

                            <td>
	                            <form action="/buku/{{$data->id_buku}}" method="post">
					              <input type="hidden" name="_method" value="delete">
					              <input type="hidden" name="_token" value="{{csrf_token()}}">
					              
					              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
	           				   </form>
	           				</td>   
						</tr>
					  </table>		
     @endforeach                       