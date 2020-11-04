$(document).ready(function(){ 
	$('#email').keyup(function(){
	 
	var email = $(this).val();
	if(email ==""){
		$('#availability').html('');
		$('#email').css("border-color", "grey")
		$('#el').css("background-color","#3274d6")
	}else{
		$.ajax({
			url:'check_email.php',
			method:"POST",
			data:{email:email},
			success:function(data)
		{
			if(data != '0')
			{
				//$('#availability').html('<span class="text-danger">Username not available</span>');
				$('#email').css("border-color", "red")
				$('#el').css("background-color","red")
				$('#register').attr("disabled", true);
			}
			else
			{
				//$('#availability').html('<span class="text-success">Username Available</span>');
				$('#email').css("border-color", "green")
				$('#el').css("background-color","green")
				$('#register').attr("disabled", false);
			}
		}
		})
	}
	});
	 
	}); 