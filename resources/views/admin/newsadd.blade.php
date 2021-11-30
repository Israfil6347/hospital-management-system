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
	  	<div class="col-md-12">
	  		  <form action="{{url('newsadd')}}" method="POST"enctype="multipart/form-data">
                @csrf
                <div class="p-2">
                  <label>User Name</label>
                  <input style="margin-left: 72px;color: black;" type="text" name="name" placeholder="Enter the Droctor name">
                </div>
                <div class="p-2">
                  <label>Heading</label>
                  <input style="margin-left: 91px;color: black;" type="text" name="heading" placeholder="Enter the Droctor name">
                </div>


                <div class="p-2">
                  <label>Description </label>
                  <input style="margin-left: 70px;color: black;" type="text" name="description" placeholder="Enter the Droctor Phone number">
                </div>

                <div class="p-2">
                  <label>Department</label>
                  <select name="spaciality" style="color: black;width:213px;margin-left: 65px;" >
                    <option>--Select--</option>
                    <option value="skin">Cov 19</option>
                    <option value="heart">Divatise</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                  </select>
                </div>
                 
                <div class="p-2">
                  <label>Galery Image </label>
                  <input style="margin-left: 57px;" type="file" name="file">
                </div>
                 
                
                <button type="submit" class="btn btn-danger">Submit</button>
              </form>
	  	</div>	   	
	  </div>
   	</div>	
</body>
</html>