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
	.faculty_image{
		height: 180px;
		width: 180px;
		border-radius: 50%;
	}
	.middle{
		background-color: #66B3FF;
		transform: translate(-90px, 5px) skew(-25deg, 0deg);
		height: 200px;
	}
	.divider{
	border-left: 5px solid #A9CFFF;
    height: 150px;
    position: relative;
    left: -40px;
    top: 50px;
    margin-left: -3px;
    transform: skew(-25deg, 10deg);
    border-radius: 5px;
	}
	.content{
	background-color: #A9CFFF;
    transform: translate(-90px, 5px) skew(-25deg, 0deg);
	}
	.icon{
		width: 20%;
		position: relative;
    	left: 0px;
	}
	.icon_content{
	background-color: white;
    margin-left: 25px;
    margin-top: 25px;
    height: 50px;
    width: 50px;
    border: 1px solid black;
    padding: 7px;
    border-radius: 50%;
	}
	.title {
		position: relative;
		width: 80%;
		font-size: 20px;
		position: relative;
		color: #FFF;
		background: #69B2FF;
		height: 50px;
		margin-top: 25px;
		line-height: 50px;
		font-size: 20px;
		font-weight: bold;
		padding-left: 5%;
	}
/* .title:after {
    content: " ";
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
    background: #FF0000;
    transform-origin: bottom left;
    -ms-transform: skew(-30deg, 0deg);
    -webkit-transform: skew(-30deg, 0deg);
    transform: skew(-30deg, 0deg);
} */
.middle_content{
    background-color: #66B3FF;
    border: 0px;
    border-radius: 0px;
	color: white;
    font-size: 20px;
    font-weight: bold;
	margin-left: 5%;
}
	</style>
@endpush

@section('page-content')
	
<div class="row" style="margin-top: 10%;">
	<div class="col-md-2" style="z-index: 1;">
		<!-- <img class="faculty_image" src="image/Dg picture.jpg" alt="Dg Picture"> -->
		<img class="faculty_image" src="{{asset('frontend/image/Dg picture.jpg')}}" alt="Avatar">
	</div>
	<div class="col-md-4 middle">
		<div class="card card-body h-100 justify-content-center middle_content">
			Designation: Director General<br>
			Name: Md. Nuruzzaman Talukdar
		 </div>
	</div>
	<div class="col-md-1 divider">
		<!-- <div class="col-md-1" style="background-color: aqua;"></div> -->
	</div>
	<div class="col-md-5 content">
		<div class="row">
			<div class="icon">
				<div class="icon_content">
					<i class="fa fa-envelope fa-2x"></i>
				</div>
			</div>
			<div class="title">
				<div class="content_o">
					<p>01285445555</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="icon">
				<div class="icon_content">
					<i class="fa fa-envelope fa-2x"></i>
				</div>
			</div>
			<div class="title">
				<div class="content_o">
					<p>244647412646</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="icon">
				<div class="icon_content">
					<i class="fa fa-envelope fa-2x"></i>
				</div>
			</div>
			<div class="title">
				<div class="content_o">
					<p>78884455411</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection