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

    body {
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

    /*#download {
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
	  color: white;
	  padding: 15px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px; 
	  border-radius: 50%;
} */


	.rectangle {

		background-color:#68b2ff;
		height: 250px;
		width:90%;
  		border-radius: 20px;
  		grid-area: overlap;
	} 

	/*.circle {
		background-color: orange;
		border-radius: 50%;
		width:108px;
		height:100px;
		grid-area: overlap;
		align-self: center;
		position: relative;
		left: -50px;
		
	}*/
	.container {
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows:1fr;
		grid-template-areas: "overlap";
	}

	.item {
		/*background-color: black;*/
		border-radius: 50%;
		width:70px;
		height:60px;
		grid-area: overlap;
		align-self: center;
		/*justify-self: center;*/
		background-color: blue; 
		border: 7px solid #68b2ff;
		color: white;
		padding: 7px;
		height:70px;
		width:80px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 30px; 
		border-radius: 50%;
		grid-area: overlap;
		align-self: center;
		position: relative;
		left: -50px;


	}
	</style>
@endpush

@section('page-content')
	
<h2><b>Statics of Training</b></h2>
<div style="height:60px; width:100%; background-color: #68b2ff; margin-top:20px; margin-bottom:20px;" > 
	<form style=" text-align:right;">
		<label for="gsearch"><b>Search</b> </label>
		<input  style="font-size:25px; border-radius: 8px; margin-top:10px; margin-right:5px; border: 1px solid #4CAF50; background-color: #68b2ff; width:280px;" type="search" id="gsearch" name="gsearch">

  </form>
</div>


<h2><b>Statics of Training</b></h2>
<div style="height:60px; width:100%; background-color: #68b2ff; margin-top:20px; margin-bottom:20px;" > 
	<form style=" text-align:right;">
		<label for="gsearch"><b>Search</b> </label>
		<input  style="font-size:25px; border-radius: 8px; margin-top:10px; margin-right:5px; border: 1px solid #4CAF50; background-color: #68b2ff; width:280px;" type="search" id="gsearch" name="gsearch">

  </form>
</div>

<h2>Previous Training</h2>

<div style="margin:0px; padding:0px;">
	<div class="row" style= "margin:0px; padding:0px;">

		<div class="col-md-1" style="margin:0px; padding:0px; border: 0.5px solid #ffffff; height:250px; width:20%; margin-bottom:30px; box-shadow: 2px 2px 3px grey; margin-right:10px; ">
			<div style=" font-size:20px; text-align:center; color:white; margin-top:15px; margin:0px; padding:0px; height:50px; width:100%; background-color:blue;">
				<b> Sl No. </b>
			</div>

			<div style="height:50px; text-align:center; font-size:20px;">1 </div>
			<div style="height:50px; text-align:center; font-size:20px;">2</div> 
			<div style="height:50px; text-align:center; font-size:20px;">3</div> 
			<div style="height:50px; text-align:center; font-size:20px;">4 </div> 
		</div>

		<div class="col-md-4" style=" margin:0px; padding:0px; box-shadow: 2px 2px 3px grey; height:250px; width:20%; margin-bottom:30px;margin-right:10px;">
			<div style=" font-size:20px; text-align:center; color:white; margin-top:15px; margin:0px; padding:0px; height:50px; width:100%; background-color:blue;">
				<b> T.Y. </b>
			</div>

			<div style="height:50px; text-align:center; font-size:20px;"> Some text content </div>
			<div style="height:50px; text-align:center; font-size:20px;">Some text content</div> 
			<div style="height:50px; text-align:center; font-size:20px;">Some text content</div> 
			<div style="height:50px; text-align:center; font-size:20px;">Some text content </div> 
		</div>

		<div class="col-md-4" style=" margin:0px; padding:0px; border: 1px solid #ffffff; height:250px; width:20%; margin-bottom:30px; box-shadow: 2px 2px 3px grey;">
			<div style=" font-size:20px; text-align:center; color:white; margin-top:15px; margin:0px; padding:0px; height:50px; width:100%; background-color:blue;">
				<b> No. o. T. p </b>
			</div>

			<div style="height:50px; text-align:center; font-size:20px;">Some text content </div>
			<div style="height:50px; text-align:center; font-size:20px;">Some text content</div> 
			<div style="height:50px; text-align:center; font-size:20px;">Some text content</div> 
			<div style="height:50px; text-align:center; font-size:20px;">Some text content </div> 
		</div>
	</div>
</div>

<h2>Current Training</h2>
<div>
	<button class="btn btn-secondary" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:blue; color:white; box-shadow: 2px 2px 3px grey;">Current Category</button>
</div>

<div style="height:40px; width:100%; color: white; text-align: center; margin-bottom: 50px; margin-top:20px; font-size:20px; background: linear-gradient(270deg, rgba(9,9,121,1) 0%, rgba(0,212,255,1) 100%);"> <b>Capacity Building Training <b> </div>



<div style="margin-bottom:20%">
	<div style="height:40px; width:100%; color: white; text-align: center; margin-bottom: 50px; margin-top:20px; font-size:20px; background: linear-gradient(270deg, rgba(9,9,121,1) 0%, rgba(0,212,255,1) 100%);"> 
		<div class="row">
			<div class="col-md-4">
				DATE
			</div>
			<div class="col-md-4">
				palce
			</div> 
			<div class="col-md-4">
				Location
			</div>

	 </div> 
	
	 <div style="height:400px; width:100%; background-color: #d6ebfb; margin:0px;">

		  <div class="row">
			<div class="col-md-4" style="padding:0px;">
				<div class="row">

					<div class="col-md-1" style="  margin-left:30px; margin-top:40px; height: 40px; width: 60px;background-color:  #417aa7; border-radius: 50%; margin-right:7px;"><p style="color: white; text-align:center; font-size:22px;"><b>1</b></p> </div> 

					<div class="col-md-7" style=" margin-top:30px; height: 50px; width: 100%;background-color: white;" > <p style="color:#417aa7; padding-top:10px;">1996 ,December 2019 </p></div>

					<div class="col-md-3" style=" margin-top:20px;width: 0; height: 0; border-top: 30px solid transparent; border-left: 50px solid white; border-bottom: 40px solid transparent;"> </div>

			</div>

		</div>

			<div class="col-md-4" style=" padding:0px;">
				<div class="row">

					<div class="col-md-8" style=" margin-top:30px; height: 50px; width: 100%;background-color: white;" > <p style="color:#417aa7; margin-top:10px;">Sylet </p></div>

					<div class="col-md-4" style=" margin-top:20px;width: 0; height: 0; border-top: 30px solid transparent; border-left: 50px solid white; border-bottom: 40px solid transparent;"> </div>

			</div>
				

			</div> 

			<div class="col-md-4" style=" padding:0px;">
				<div class="row">

					<div class="col-md-8" style=" margin-top:30px; height: 50px; width: 100%;background-color: white;" > <p style="color:#417aa7; margin-top:10px;">Replace</p></div>

					<div class="col-md-4" style=" margin-top:20px;width: 0; height: 0; border-top: 30px solid transparent; border-left: 50px solid white; border-bottom: 40px solid transparent;"> </div>

			</div>
			</div> 
	 </div> 
   
	
		  <div class="row">
			<div class="col-md-4" style="padding:0px;">
				<div class="row">

					<div class="col-md-1" style="  margin-left:30px; margin-top:40px; height: 40px; width: 60px;background-color:  #417aa7; border-radius: 50%; margin-right:7px;"><p style="color: white; text-align:center; font-size:22px;"><b>1</b></p> </div> 

					<div class="col-md-7" style=" margin-top:30px; height: 50px; width: 100%;background-color: white;" > <p style="color:#417aa7; padding-top:10px;">1996 ,December 2019 </p></div>

					<div class="col-md-3" style=" margin-top:20px;width: 0; height: 0; border-top: 30px solid transparent; border-left: 50px solid white; border-bottom: 40px solid transparent;"> </div>

			</div>

		</div>

			<div class="col-md-4" style=" padding:0px;">
				<div class="row">

					<div class="col-md-8" style=" margin-top:30px; height: 50px; width: 100%;background-color: white;" > <p style="color:#417aa7; margin-top:10px;">Sylet </p></div>

					<div class="col-md-4" style=" margin-top:20px;width: 0; height: 0; border-top: 30px solid transparent; border-left: 50px solid white; border-bottom: 40px solid transparent;"> </div>

			</div>
				

			</div> 

			<div class="col-md-4" style=" padding:0px;">
				<div class="row">

					<div class="col-md-8" style=" margin-top:30px; height: 50px; width: 100%;background-color: white;" > <p style="color:#417aa7; margin-top:10px;">Replace</p></div>

					<div class="col-md-4" style=" margin-top:20px;width: 0; height: 0; border-top: 30px solid transparent; border-left: 50px solid white; border-bottom: 40px solid transparent;"> </div>

			</div>
			</div> 
	 </div> 
	 </div>
</div>
</div>


@endsection