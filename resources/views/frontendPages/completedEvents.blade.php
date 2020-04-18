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

<p> Completed Events </p>

<div style="height:40px; width:100%; background-color:blue; margin:0px; padding:0px;"><p> Few text</p></div>
<div style="height:40px; width:100%; background-color:yellow; margin:0px; padding:0px;"><p> Few text</p></div>
<div><p> add some discription </p> </div>







  <div class="row">
  <div class="col-md-5;"> 


  <div class="col-md-4;" style="margin-left:20px;">

  <div style="height: 550px; margin:5%; border-style: groove; box-shadow: 3px 3px #888888; ">

	  <ul class="list-group"">		
			<li class="list-group-item active" style="text-align:center;">Time</li> 
		</ul>

		<div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>
		<div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>
	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>
	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>   		
</div>
	  
	
</div>
</div>
<!--End plan name-->


<div class="col-md-4;" style="margin-left:20px;">

<div style="height: 550px; margin:5%; border-style: groove; box-shadow: 3px 3px #888888; ">

	  <ul class="list-group"">		
			<li class="list-group-item active" style="text-align:center;">Duration</li> 
		</ul>

		<div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>
		<div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr> 

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr> 

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>   		
</div>
	  
	
</div>

<!--end duration-->

<div class="col-md-4;" style="margin-left:20px;">

<div style="height: 550px; margin:5%; border-style: groove; box-shadow: 3px 3px #888888; ">

	  <ul class="list-group"">		
			<li class="list-group-item active" style="text-align:center;">Duration</li> 
		</ul>

		<div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>
		<div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>2019-2020</p>
		  </div>
	  </div>
	  <hr>  

	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr> 
	  <div class="row" style=" margin: 0px; height:30px; width:300px; margin-top:15px; text-align:center;" >

		  <div class="col-md-10"> 
			  <p>6.45 AM</p>
		  </div>
	  </div>
	  <hr>  		
</div>
		  
</div>
	 

</div> 
</div>

@endsection