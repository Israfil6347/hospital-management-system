<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
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
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-12">
	 		   <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
  				<tr>
				    <th style="border: 1px solid black;width:100px;">Name</th>
				    <th style="border: 1px solid black;width:100px;">Email</th>
				    <th style="border: 1px solid black;">Subject</th>
				    <th style="border: 1px solid black;">Massge</th>
				  </tr>
				  @foreach($data as $massage)
                 <tr style="border: 1px solid black;text-align: center;">
				    <td style="border: 1px solid black;">{{$massage->name}}</td>
				    <td style="border: 1px solid black;">{{$massage->email}}</td>
				    <td style="border: 1px solid black;">{{$massage->subject}}</td>
				    <td style="border: 1px solid black;">{{$massage->massage}}</td>
 				 </tr>
 				 @endforeach
		  
				</table>
	 		</div>
	 	</div>
	 </div>
   	</div>	
</body>
</html>
</body>
</html>