<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	@include('admin.css')
</head>
<body>
	@include('admin.sideber') 
    @include('admin.navber')
   <div class="container-fluid page-body-wrapper">
	  <div class="row">
	  	<div align="center" style="padding: 100px;">
	  		<table>
	  			<tr>
		            <th style="border: 1px solid black">Doctor Name</th>
		            <th style="border: 1px solid black;">Phone</th>
		            <th style="border: 1px solid black;">Spaciality</th>
		            <th style="border: 1px solid black;">Room No</th>
		            <th style="border: 1px solid black;">Image</th>
		            <th style="border: 1px solid black;">Biography</th>
		            <th style="border: 1px solid black;">Edit</th>
		            <th style="border: 1px solid black;">Delete </th>
		          </tr>
		          @foreach($data as $doctor)
		          <tr>
		          	
		            <td style="border: 1px solid black; color: black;">{{$doctor->name}}</td>
		            <td style="border: 1px solid black; color: black;">{{$doctor->phone}}</td>
		            <td style="border: 1px solid black;">{{$doctor->spaciality}}</td>
		            <td style="border: 1px solid black; color: black;">{{$doctor->room}}</td>
		            <td style="border: 1px solid black; color: black;"><img src="doctorimage/{{$doctor->image}}" alt=""></td>
		            <td style="border: 1px solid black; color: black;">{{$doctor->bio}}</td>
		            <td style="border: 1px solid black; color: black;"class="btn btn-primary"><a href="{{url('update_doc',$doctor->id)}}">Update</a></td>
		            <td style="border: 1px solid black; color: black;"class="btn btn-danger"><a onclick="return confirm('are you sure to delate')" href="{{url('delete_doc',$doctor->id)}}">Delete</a></td>
		            
		          </tr>
		          @endforeach
	  		</table>
	  		
	  	</div>
	   	
	  </div>
   	</div>	
</body>
</html>