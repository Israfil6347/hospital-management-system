<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')

    <style type="text/css">
      
      .label{
        display: inline-block;
        width: 200px;
      }
    </style>
  </head>
  <body>
  
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sideber')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
       
        @include('admin.navber')
        <!-- partial -->
       
          <!-- main container of adddoctor -->
          <div class="container-fluid page-body-wrapper">

            <div class="container p-5" align="center">
               @if(session()->has('massage'))

            <div class="alert alert-danger">

              <button type="button" class="close" data-dismiss="alert">X</button>

              {{session()->get('massage')}}
              
            </div>
            @endif
              <form action="{{url('upload_doctor')}}" method="POST"enctype="multipart/form-data">
                @csrf
                <div class="p-2">
                  <label>Doctor Name </label>
                  <input style="margin-left: 40px;color: black;" type="text" name="name" placeholder="Enter the Droctor name">
                </div>


                <div class="p-2">
                  <label>Phone Number </label>
                  <input style="margin-left: 27px;color: black;" type="number" name="phone" placeholder="Enter the Droctor Phone number">
                </div>

                <div class="p-2">
                  <label>Speciality</label>
                  <select name="spaciality" style="color: black;width:213px;margin-left: 65px;" >
                    <option>--Select--</option>
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="eye">Eye</option>
                    <option value="nose">Nose</option>
                  </select>
                </div>
                 <div class="p-2">
                  <label>Room No</label>
                  <input style="margin-left: 67px;color: black;" type="number" name="room" placeholder="Enter the Droctor Room No">
                </div>
                <div class="p-2">
                  <label>Doctor Image </label>
                  <input type="file" name="file">
                </div>

                <div class="p-2">
                  <label>Doctor Bigoropy </label>
                  <textarea style="margin-left: 100px;color: black;" name="bio" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
              </form>
              
            </div>
          </div>
         
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.jquery')
    <!-- End custom js for this page -->
  </body>
</html>