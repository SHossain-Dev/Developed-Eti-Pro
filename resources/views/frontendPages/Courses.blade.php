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

*{
    	padding: 0;
    	margin: 0;
    	outline:0;
    }

    body{
            margin: 5%;
            margin-top: 0%;
            margin-bottom: 0%;
        }
    .square {
     	height: 20px;
  		width: 20px;
  		background-color: blue;
  		box-shadow: 4px 4px grey;
    }

    #download {
  		border-radius: 25px;
  		background: black;
  		padding: 12px;
  		width: 120px;
  		height: 12px;
 		text-align: center;
	}

	#border1 {
    display: gray;
    unicode-bidi: isolate;
    margin-block-start: 0.2em;
    margin-block-end: 0.2em;
    margin-inline-start: auto;
    margin-inline-end: auto;
    overflow: hidden;
    border-style: inset;
    border-width: 0.5px;
    border-color: gray;
    margin-bottom:20px;
}
	.heading {
		height:50px;
		width: 100%;
		background-color:blue;
		text-align:left;
		margin-bottom: 20px;
		color: white;
	}
	#dropdownMenuButton {
		background-color: blue;
		width:150px;
		height:30px; 
		margin-bottom:10px;
		box-shadow: 2px 2px grey;
	}
	.discouse {
	height: 750px
	width: 100%;
	background-color: white;
	border: 1px solid #3B7EB2;
}

#icon1 {

	  background-color:; 
	  border: 2px solid #68b2ff;
	  /*color: white;*/
	  padding: 15px;
	  text-align: center;
	  text-decoration: none;
	 /* display: inline-block;*/
	  font-size: 16px; 
	  border-radius: 50%;
}
	 

	</style>
@endpush

@section('page-content')
	
<div class="dropdown" style="margin-bottom:20px;">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	  <a class="dropdown-item" href="#">Action</a>
	  <a class="dropdown-item" href="#">Another action</a>
	  <a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>

<p> Upcomming Cources </p>

<div style="height:40px; width:100%; background-color:blue; margin:0px; padding:0px; text-align:center;"><p> Few text</p></div>

<div style="height:40px; width:100%; background-color:yellow; margin:0px; padding:0px; text-align:center;margin-bottom:10px;"><p>add new text</p></div>


<div>
<div class="row"> 
  <div class="col-md-6">
	  Course Advisor</div>
  <div class="col-md-6">
	  Contact Details
  </div> 
</div>

<div class="row">
  <div class="col-md-3;"> 

	  <img src="image/1.jpg" alt="Designation" style=" height:250px; width:250px; border-style: outset;">
  </div>

  <div class="col-md-3" style="margin-top:50px;">
	  <p style="margin:0px;  color: blue; font-size: 20px;" > Name </p>
	  <p><b> Designation </b></p>
  </div>

  <div class="row">
	  <div class="col-md-12">
	  <i class="fa fa-phone" id="icon1" aria-hidden="true"> </i>
				  <p> +88 02 8181 731 </p>
	  </div>

  <div class="row">
	  <div class="col-md-12">
	  <i class="fa fa-phone" id="icon1" aria-hidden="true"> </i>
				  <p> +88 02 8181 731 </p>
	  </div>

  </div>
</div>
</div>
<hr>
   
</div>

@endsection