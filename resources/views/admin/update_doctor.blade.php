
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
    
      @include('admin.sideber')
     
        @include('admin.navber')
           <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding: 100px;">
               @if(session()->has('massage'))

            <div class="alert alert-danger">

              <button type="button" class="close" data-dismiss="alert">X</button>

              {{session()->get('massage')}}
              
            </div>
            @endif
              <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                  <label>Doctor Name</label>
                  <input type="text" name="name" value="{{$data->name}}" style="color: black; margin-left: 15px;padding: 5px;">
                </div>
                <div style="padding: 15px;">
                  <label>Phone</label>
                  <input type="text" name="phone" value="{{$data->phone}}" style="color:black;padding: 5px;margin-left: 65px;">
                </div>
                <div style="padding: 15px;">
                  <label>Spaciality</label>
                  <input type="text" name="spaciality" value="{{$data->spaciality}}"style="color:black;padding: 5px;margin-left: 40px;">
                </div>
                <div style="padding: 15px;">
                  <label>Room No</label>
                  <input type="text" name="room" value="{{$data->room}}"style="color:black;padding: 5px;margin-left: 42px;">
                </div>
                <div style="padding: 15px;">
                  <label>Biograpy</label>
                  <input type="text" name="bio" value="{{$data->bio}}"style="color:black;padding: 5px;margin-left: 45px;">
                </div>
                <div style="padding: 15px;">
                  <label>Old image</label>
                  <img src="doctorimage/{{$data->image}}" style="width: 300px;" alt="">
                </div>
                <div style="padding: 15px;">
                  <label>New image</label>
                  <input type="file" name="file">
                </div>

                 <div style="padding: 15px;">
                 
                  <input type="submit" class="btn btn-primary">
                </div>
              </form>
              
            </div>
           </div>

    @include('admin.jquery')
    
  </body>
</html>