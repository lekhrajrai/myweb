<div class="modal-content"> 
		<div class="modal-header"> 
			<h5 class="modal-title">Login Here</h5> 
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
				<span aria-hidden="true">&times;</span> 
			</button> 
		</div> 

		<div class="modal-body"> 


			<!-- <form id="login" method="post" >
				
			  <div class="form-group">
			    <label for="userEmail">Email address</label>
			    <input type="email" class="form-control text-center" name="email" id="userEmail" placeholder="Enter email">
			    
			  </div>
			  
			  <div class="form-group">
			    <label for="userPassword">Password</label>
			    <input type="password" class="form-control text-center" name="password" id="userPassword" placeholder="*********">
			  </div>

			</form> -->


			<form method="POST" action="{{route('login')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
		</div> 

		<!-- <div class="modal-footer"> 
			<button type="button" id="btnLogin"   class="btn btn-primary">Login</button> 
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
		</div>  -->
	</div> 