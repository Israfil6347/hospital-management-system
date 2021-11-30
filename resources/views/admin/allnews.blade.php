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
	  	<a class="btn btn-primary" href="{{url('add_news')}}"> + Add News </a>
	  		
	  	</div>
	   	
	  </div>
   	</div>	
</body>
</html>