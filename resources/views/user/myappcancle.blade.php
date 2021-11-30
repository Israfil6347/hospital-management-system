<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>


@include('user.header')
<!--  -->
<h2 style="text-align: center;">My appoinment </h2>
<table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
  <tr>
    <th style="border: 1px solid black;width:200px;">Doctor Name</th>
    <th style="border: 1px solid black;width:150px;">Date</th>
    <th style="border: 1px solid black;">Massage</th>
    <th style="border: 1px solid black;width:150px;">Statas</th>
    <th style="border: 1px solid black;width:150px;">Delete</th>
    
  </tr>
@foreach($app as $apps)
  <tr style="border: 1px solid black;text-align: center;">
    <td style="border: 1px solid black;">{{$apps->departement}}</td>
    <td style="border: 1px solid black;">{{$apps->date}}</td>
    <td style="border: 1px solid black;">{{$apps->massage}}</td>
    <td style="border: 1px solid black;">{{$apps->status}}</td>
    <td style="border: 1px solid black;"><a class="btn btn-primary" type="button" href="{{url('cancel_appo',$apps->id)}}">Delete</a></td>
  </tr>
  @endforeach
	
  
</table>

  <!-- .page-section -->
@include('user.footer')


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
