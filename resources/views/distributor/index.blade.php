	
					  <table border="1">
					  	<tr>
					  		<th>id_distributor</th>
					  		<th>nama_distributor</th>
					  		<th>alamat</th>
					  		<th>telepon</th>
					  		<th>edit</th>
					  		<th>delete</th>
					  	</tr>
					  	</table>
	@foreach ($distributor as $data)
					  	<table border="1">
						<tr>
                            <td>{{$data -> id_distributor}}</td>
                            <td><a href="/distributor/{{$data -> id_distributor}}">{{$data -> nama_distributor}}</a></td>
                            <td>{{$data -> alamat}}</td>
                            <td>{{$data -> telepon}}</td>
                            <td>
								 <button type="submit" class="btn btn-default btn-xs btn-danger" value="edit"><i class="fa fa-times"></i><a href="/distributor/{{$data->id_distributor}}/edit">Edit</a></button>
	           				   
                            </td>

	                       	<td>
	                       		<form action="/distributor/{{$data->id_distributor}}" method="post">
					              <input type="hidden" name="_method" value="delete">
					              <input type="hidden" name="_token" value="{{csrf_token()}}">
					              
					              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
	             				</form>
	             			</td>	
						</tr>
					  </table>		
     @endforeach                       