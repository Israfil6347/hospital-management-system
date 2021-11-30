
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
    @include('admin.sideber') 
    @include('admin.navber')
  <div class="container">
      <div class="row">
        <h3>all Apoienment</h3>

       <table style="width: 100%; border-collapse: collapse; border: 1px solid black;font-size: 10px;" class="mt-5">
          <thead>
          <tr>
            <th style="border: 1px solid black">Name</th>
            <th style="border: 1px solid black;">Email</th>
            <th style="border: 1px solid black;">Date</th>
            <th style="border: 1px solid black;">Department</th>
            <th style="border: 1px solid black;">Number</th>
            <th style="border: 1px solid black;">Massage</th>
            <th style="border: 1px solid black;">status</th>
            <th style="border: 1px solid black;">Approved </th>
            <th style="border: 1px solid black;">Cancel </th>
          </tr>
        </thead>
         <tbody>
           @foreach($data as $apps)
          <tr style="border: 1px solid black;text-align: center;">
            <td style="border: 1px solid black;">{{$apps->name}}</td>
            <td style="border: 1px solid black;">{{$apps->email}}</td>
            <td style="border: 1px solid black;">{{$apps->date}}</td>
            <td style="border: 1px solid black;">{{$apps->departement}}</td>
            <td style="border: 1px solid black;">{{$apps->number}}</td>
            <td style="border: 1px solid black;">{{$apps->massage}}</td>
            <td style="border: 1px solid black;">{{$apps->status}}</td>
            <td style="border: 1px solid black;"class="btn btn-primary"><a href="{{url('approved',$apps->id)}}">Approved</a></td> 
            <td style="border: 1px solid black;"class=" btn btn-danger"><a href="{{url('cancel',$apps->id)}}">cancel</a></td>
          </tr>
         @endforeach
       </tbody>
  
         </table>
        </div>
    </div>
    @include('admin.jquery')
    
  </body>
</html>