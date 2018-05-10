<div class="modal-content"> 
		<div class="modal-header"> 
			<h5 class="modal-title">Register Here</h5> 
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
				<span aria-hidden="true">&times;</span> 
			</button> 
		</div> 

		<div class="modal-body"> 
			<form id="registerForm" method="post">
				<div class="form-group">
				    <label for="fullname">Full Name</label>
				    <input type="text" class="form-control text-center" name="name" id="fullname" placeholder="eg.Hari Pokhrel">
				    
				</div>
			  <div class="form-group">
			    <label for="userEmail">Email address</label>
			    <input type="text" class="form-control text-center" name="email" id="userEmail" placeholder="eg.example@gmail.com">
			  </div>

			  <div class="form-group">
			    <label for="userPassword">Password</label>
			    <input type="password" class="form-control text-center" name="password" id="userPassword" placeholder="**********">
			  </div>
			  
			</form>
		</div> 

		<div class="modal-footer"> 
			<button type="button" id="btnRegister"   class="btn btn-primary">Register</button> 
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
		</div> 
</div> 