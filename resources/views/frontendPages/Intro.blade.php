@extends('layouts.frontend.master') 

@section('style-lib')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--fontawesome link-->
    	<link rel="stylesheet" href="fonts/font-awesome.min.css">
    	    <!--CSS link
     <link rel="stylesheet" type="text/css" href="css/style.css">-->

     	<!--CSS link
     	<link rel="stylesheet" type="text/css" href="css/Eti_Style.css">-->

     	<!--Js link-->

     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@push('custom-css')
	<style type="text/css">
    body {
    	
      margin: 5%;
      margin-top: 0%;
      margin-bottom: 0%;    
  }

    .ribbon_bookmark {
    background: #ffffff;
    top: 0px;
    left: -16px;
    font-size: 17px;
  }
  .navbar-light{
    padding: 0px;
  }
	</style>
@endpush

@section('page-content')
	
<div class="container">
    <h2 style="color:#8ab8e3;"> Introducing ETI </h2> 

    <div style="background-color:#d5eaff; font-size:25px; color: black; text-align: justify;">
      <p> Electoral Training institute(ETI)is the principal Institute of Bangladesh Commission to train the election officials of the country since 1995. Through this long journey, it imparts training on preparation and updating of elections rolls, preparation and distribution of National Identity cards(NID),conducting various types of elections including Parliamentary election, City Corporation, Paurashava, Upazila Prishad and Union Parishad general elections and by-elections. Form the very inception of ETI, it gives its best priority to provide quality training to the Election commission officials to make them aware of their importantrole of election commission</p>
    </div>

    <h2  style="color:#8ab8e3;">  Phisical infrastructural and accomodation</h2>

    <div style= "background-color:#d5eaff; font-size:25px; color: black; text-align: justify; " >
      <p> ETI is located at plot e 14 z Bangla Dhaka 1207 the location of the UTI is adjacent to the newly built Nirvachan Bhawan is a coil furnished 12 story accommodation facilities for the train train train</p>
    </div>
</div>


@endsection