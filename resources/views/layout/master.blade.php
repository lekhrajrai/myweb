<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}" >

	<title>@yield('title','Master Title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
</head>
<body>
	<div class="container-fluid border">


		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">

				<!-- nav starts-->
				
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand" href="#">
					  	<img src="images/logo.png" height="70px" width="70px">
					  </a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>



					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item active">
					        <a class="nav-link" href="index">Home</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="about">About</a>
					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="hobbies">Hobbies</a>
					      </li>
					      
					      <li class="nav-item">
					        <a class="nav-link " href="contact">Contact</a>
					      </li>
					    </ul>

					    <ul class="form-inline my-2 my-lg-0">
					     
					      <button class="btn btn-outline-success my-2 my-sm-0 "  data-target="#custom-modal" data-toggle="modal" id="btnModalLogin">Login</button>



					      <button class="btn btn-outline-success my-2 my-sm-0 ml-2" ata-target="#custom-modal" data-toggle="modal" id="btnModalRegister">Register</button>
					    </ul>
					  </div>
					</nav>
				
				<!-- nav ends -->

				<!-- modal -->
				<div class="modal fade " id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 

					<div class="modal-dialog" id="ModalBody" role="document"> 

					</div> 
				</div>
				<!-- modal ends -->

			</div>
		</div>


		<div class="row">
			<div class="col-12 col-sm-12 col-md-12">
				<div class="custom-content mt-5">
					<div class="btn btn-sm bg-success" id="btnAddHubby" data-target="#custom-modal" data-toggle="modal">Add Hubby</div>	
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-7 col-md-7 col-lg-7 mt-3">
				<div class="left-div">
					<ul>
						<li>Hobbies List</li>
					</ul>
					@yield('left-div-content');
				</div>
			</div>
			<div class="col-12 col-sm-5 col-md-5 col-lg-5 mt-3">
				<div class="right-div bg-success">
					<h2>This is right side</h2>
				</div>
			</div>
		</div>



	</div>

	<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$(document).on('click','#btnModalLogin',function(e){
				e.preventDefault(); 
				showModal('loginModal'); 
			});
		});
		


		$(document).ready(function(){
			$(document).on('click','#btnModalRegister',function(e){
				e.preventDefault(); 
				showModal('registerModal'); 
			});
		});

		//add hobbies
		$(document).ready(function(){
			$(document).on('click','#btnAddHubby',function(e){
				e.preventDefault();
				showModal('addHobby');
			});
		});


		//update and delete hobby
		$(document).ready(function(){
			$(document).on('click','#btnMyView',function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				console.log(id);
				
				showModal('viewHobby/'+id);
			});
		});

		$(document).ready(function(){
			$(document).on('click','#btnMyEdit',function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				console.log(id);
				showModal('editHobby/'+id);
			});
		});

		$(document).ready(function(){
			$(document).on('click','#btnMyDelete',function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				console.log(id);
				
				showModal('deleteHobby/'+id);
			});
		});
		
	</script>
</body>
</html>