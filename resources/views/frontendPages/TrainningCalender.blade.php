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
	
	</style>
@endpush

@section('page-content')
	
<div class="heading"><b>TRAINING CALENDER</b></div>
<div style="margin-bottom:20px;"><t> <b> Training calender of ETI</b> <br/> Training calender of BPATXfor 2019-2020</t></div>

	  <div>
	  <div class="row">

		  <div class="col-md-1"> 
			  <div class="square"></div>
		  </div>

	  <div class="col-md-2" >
		  <p>Table of conternts</p>
		  </div>
	  <div class="col-md-1">
		  <i class="fa fa-eye" aria-hidden="true"></i>
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Download</a>
		  </div>

	  </div> 
  </div>
  <div>
	  <div class="row">

		  <div class="col-md-1"> 
			  <div class="square"></div>
		  </div>

	  <div class="col-md-2" >
		  <p>Introducing BPATC</p>
		  </div>
	  <div class="col-md-1">
		  <i class="fa fa-eye" aria-hidden="true"></i>
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Download</a>
		  </div>

	  </div>     		
  </div>

  <div>
	  <div class="row">

		  <div class="col-md-1"> 
			  <div class="square"></div>
		  </div>

	  <div class="col-md-2">
		  <p>Training Programs</p>
		  </div>
	  <div class="col-md-1">
		  <i class="fa fa-eye" aria-hidden="true"></i>
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Download</a>
		  </div>

	  </div> 
  </div>

  <hr>

		<div style="margin-bottom:20px;"><t> <b> Training calender of ETI</b> <br/> Training calender of BPATXfor 2019-2020</t></div>

	  <div>
	  <div class="row">

		  <div class="col-md-1"> 
			  <div class="square"></div>
		  </div>

	  <div class="col-md-2" >
		  <p>Table of conternts</p>
		  </div>
	  <div class="col-md-1">
		  <i class="fa fa-eye" aria-hidden="true"></i>
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Download</a>
		  </div>

	  </div> 
  </div>
  <div>
	  <div class="row">

		  <div class="col-md-1"> 
			  <div class="square"></div>
		  </div>

	  <div class="col-md-2" >
		  <p>Introducing BPATC</p>
		  </div>
	  <div class="col-md-1">
		  <i class="fa fa-eye" aria-hidden="true"></i>
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Download</a>
		  </div>

	  </div>     		
  </div>

  <div>
	  <div class="row">

		  <div class="col-md-1"> 
			  <div class="square"></div>
		  </div>

	  <div class="col-md-2">
		  <p>Training Programs</p>
		  </div>
	  <div class="col-md-1">
		  <i class="fa fa-eye" aria-hidden="true"></i>
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Download</a>
		  </div>

	  </div> 
  </div>

  <div>
	  <div class="row">

		  <div class="col-md-4" style="font-size:20px;"> 
			  Training calender of ETI for 2017-2018
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Details</a>
		  </div>

	  </div> 
  </div>

  <div>
	  <div class="row">

		  <div class="col-md-4" style="font-size:20px;"> 
			  Training calender of ETI for 2016-2017
		  </div>

	  <div class="col-md-1">
			  <a href="#" class="btn btn-info" id="download" role="button"> Details</a>
		  </div>

	  </div> 
  </div>


@endsection