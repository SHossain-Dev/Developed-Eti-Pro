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
		 <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/Former-DG.css')}}">

     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection
@push('custom-css')
	<style type="text/css">

body {
    	
        margin: 5%;
        margin-top: 5%;
        margin-bottom: 0%;
        
    }
	</style>
@endpush

@section('page-content')
	
<div style="background-color:#E6FBD9; font-size:12px; width: 100%; padding-bottom: 10px; ">	

	<div id="faculty-table_filter" class="dataTables_filter" style= " float:right; padding-top:7px;">
		<label>Search
			<input type="search" class="" placeholder="" aria-controls="faculty-table"> 
		</label> 
	</div> 
	<div class="dataTables_length" id="faculty-table_length"> 
		<label style= " padding-top:7px;">Entries 
			<select name="faculty-table_length" aria-controls="faculty-table" class=""> 
				<option value="10">10</option> 
				<option value="25">25</option> 
				<option value="50">50</option> 
				<option value="100">100</option> 
			</select>  
		</label> 
	</div>
	</div> 


<div class="col-xs-12 col-sm-12 col-lg-12 table-responsive" style="padding-top:10px;">
<div id="faculty-table_wrapper" class="dataTables_wrapper no-footer">
	<div class="wrapper">

	<div> 


		<table id="faculty-table" class="table table-striped table-bordered table-hover table-condensed table-responsive dataTable no-footer" role="grid" aria-describedby="faculty-table_info">

	<thead style="background-color:#E6FBD9; font-size:12px;">
		<tr role="row"> 
			<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Picture" style="width: 72px;">Picture</th> 

			<th class="sorting" tabindex="0" aria-controls="faculty-table" rowspan="1" colspan="1" aria-label="Name &amp;amp; Designation: activate to sort column ascending" style="width: 105px;">Name &amp; Designation</th> 


			<th class="sorting" tabindex="0" aria-controls="faculty-table" rowspan="1" colspan="1" aria-label="Contact(Phone &amp;amp; Email): activate to sort column ascending" style="width: 146px;">Contact(Phone &amp; Email)</th> 
		</tr>
	</thead>

	<tbody>

		<tr role="row" class="odd">

	<td style="width:15%; text-align:left; vertical-align:middle;"> 
		
		<img style="border:0px solid #CCC; border-radius: 50%; width:200px;" alt="Avatar" class="avatar" src="image/1.jpg"> 
	</td>

	<td style="width:50%; text-align:left; vertical-align:middle;"> 
		<a href="javascript:void(0)" id="id_133" class="cvshow"> 
			<span style="font-size:12px;font-family: Arial;position:relative;left:-5px;">Dr. M ASLAM ALAM</span> 
		</a> 
		<br> 
		<span style="font-size:11px;font-family:Arial;">Rector (Senior Secretary to the Govt.)</span> 
	</td>


	<td style="width:15%; text-align:left; vertical-align:middle;"> 
		<span style="font-size:12px;font-family: Arial;text-align: left;">7745028(o); m.aslam.alam@gmail.com</span><br> 
		<span style="font-size:11px;font-family:Arial;"> 
			<a style="color:green;position:relative;left:-5px;" href="mailto:rector@bpatc.org.bd">rector@bpatc.org.bd</a>   
		</span> 
	</td>

</tr> 

	

<tr role="row" class="even">
	<td style="width:15%; text-align:left; vertical-align:middle;"> 
		<img style="width:90px; border:0px solid #CCC;" src="images/faculty/asshameem.jpg"> 
	</td>

	<td style="width:50%; text-align:left; vertical-align:middle;"> 
		<a href="javascript:void(0)" id="id_3" class="cvshow"> 
			<span style="font-size:12px;font-family: Arial;position:relative;left:-5px;">A. S. Shameem Ahmed</span></a> 
			<br> 
			<span style="font-size:11px;font-family:Arial;">Member Directing Staff (R &amp; C)(Additional Secretary to the Govt.)</span> 
	</td>


	<td style="width:15%; text-align:left; vertical-align:middle;"> 
		<span style="font-size:12px;font-family: Arial;text-align: left;">7745025(o), 7745010-16 Ext:4106(o), 01552386357(m) </span> 
		<br> 
		<span style="font-size:11px;font-family:Arial;"> 
			<a style="color:green;position:relative;left:-5px;" href="mailto:asshameem@yahoo.com">asshameem@yahoo.com</a> 
		</span> 
	</td>

</tr> 

<tr role="row" class="odd">
	<td style="width:15%; text-align:left; vertical-align:middle;"> 
		<img style="width:90px; border:0px solid #CCC;" src="images/faculty/asshameem.jpg"> 
	</td>

	<td style="width:50%; text-align:left; vertical-align:middle;"> 
		<a href="javascript:void(0)" id="id_3" class="cvshow"> 
			<span style="font-size:12px;font-family: Arial;position:relative;left:-5px;">A. S. Shameem Ahmed</span></a> 
		<br> 
		<span style="font-size:11px;font-family:Arial;">Member Directing Staff (R &amp; C)(Additional Secretary to the Govt.)</span> 
	</td>


	<td style="width:15%; text-align:left; vertical-align:middle;"><span style="font-size:12px;font-family: Arial;text-align: left;">7745025(o), 7745010-16 Ext:4106(o), 01552386357(m) </span><br><span style="font-size:11px;font-family:Arial;"><a style="color:green;position:relative;left:-5px;" href="mailto:asshameem@yahoo.com">asshameem@yahoo.com</a></span></td>

</tr> 

</tbody>

</table> 
</div> 

</div>
</div>
</div>
 
@endsection