	
					  <table border="1">
					  	<tr>
					  		<th>id_kasir</th>
					  		<th>nama</th>
					  		<th>alamat</th>
					  		<th>telepon</th>
					  		<th>status</th>
					  		<th>username</th>
					  		<th>akses</th>	
					  		<th>edit</th>
					  		<th>delete</th>
					  	</tr>
					  	</table>
	@foreach ($kasir as $data)
					  	<table border="1">
						<tr>
                            <td>{{$data -> id_kasir}}</td>
                            <td><a href="/kasir/{{$data -> id_kasir}}">{{$data -> nama}}</a></td>
                            <td>{{$data -> alamat}}</td>
                            <td>{{$data -> telepon}}</td>
                            <td>{{$data -> username}}</td>
                            <td>{{$data -> akses}}</td>
                            <td>
								 <button type="submit" class="btn btn-default btn-xs btn-danger" value="edit"><i class="fa fa-times"></i><a href="/kasir/{{$data->id_kasir}}/edit">Edit</a></button>
	           				   
                            </td>

	                       	<td>
	                       		<form action="/kasir/{{$data->id_kasir}}" method="post">
					              <input type="hidden" name="_method" value="delete">
					              <input type="hidden" name="_token" value="{{csrf_token()}}">
					              
					              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
	             				</form>
	             			</td>	
						</tr>
					  </table>		
     @endforeach                       