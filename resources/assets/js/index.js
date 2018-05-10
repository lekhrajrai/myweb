function sendAjax(request ,callback=''){
	var url = request.url?request.url:'/'; 
	var method = request.method?request.method:'get'; 
	var data = request.data?request.data:{}; 


	$.ajaxSetup({ 
		headers: { 
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
		} 
	});

	$.ajax({ 
		url : url, 
		method : method, 
		data : data, 


		success: function(response){ 
			$('#custom-modal').modal('hide');
				if (typeof(callback) != 'string') {
					callback(response); 
				} 
			} 
	}); 
} 


function showModal(url){ 
	$('#custom-modal').modal(); 
		sendAjax({url:url},
		function(data){ 
			$('#ModalBody').html(data); 
		});
	}



//register

$(document).ready(function(){
	$(document).on('click','#btnRegister',function(e){
		e.preventDefault();
			var data = {};
			var valid = false;

		$('#registerForm').find('input').each(function(){
			

			data = $('#registerForm').serializeArray();
			
			if ($(this).val()=="" || $(this).val()==null) {
				$(this).css("border","1px solid red");
				valid = false;
				console.log(valid);
				return;
			}
			 else if($(this).attr('name')=='password'){
				if ($(this).val().length <4 ) {
					$(this).css("border","1px solid red");
					valid = false;
					console.log(valid);
					return;
				}
			}


			else if ($(this).attr('name')=='email') {

				if ($(this).val().includes('.','@')) {
					//alert("yes");
					$(this).css("border","");
					valid=true;
					
				}
				else {

					//alert("no");
					$(this).css("border","1px solid red");
					
					valid=false;
					return;

				}
			}

			else{
				data.push({[$(this).attr('name')]:$(this).val()});
				valid=true;
			}


		});
		if (valid) {
			console.log(data);
			
			
			sendAjax({
				url:'signup',
				method:'post',
				data:data,
			},function(data){
				//location.reload(true);
			});
		}
	});
});


$(document).ready(function(){
	$(document).on('click','#btnSaveHobby',function(){
		//var data = $('input#content').val();
		var data = $('#hobbies').serializeArray();
		console.log(data);

		sendAjax({
			url:'storeHobby',
			method:'post',
			data:data,
		},function(data){
			location.reload(true);
		});
	});
});



//update and delete
$(document).ready(function(){
	$(document).on('click','#btnUpdateHobby',function(e){
		e.preventDefault();
		var data = $('#hobbies').serializeArray();
		console.log(data);
		var id = $(this).attr('data-id');
		console.log(id);
		sendAjax({
			url:'updateHobby/'+id,
			method:'post',
			data:data
		},function(data){
			location.reload(true);
		});
	});
});

$(document).ready(function(){
	$(document).on('click','#btnDeleteHobby', function(e){
		e.preventDefault();

		var id = $(this).attr('data-id');
		console.log(id);

		sendAjax({
			url:'deleteConfirm/'+id,
			method:'post',

		}, function(){
			location.reload(true);
		})
	})
})


$(document).ready(function(){
	$(document).on('click','#btnLogin',function(e){
		e.preventDefault();
		var data = $('#login').serializeArray();
		console.log(data);

		sendAjax({
			url:'login',
			method:'post',
			data:data
		},function(data){

		});
	});
});