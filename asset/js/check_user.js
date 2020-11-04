$(document).ready(function(){ 
	$('#username').keyup(function(){
	 
	var username = $(this).val();
	if(username ==""){
		//$('#availability').html('');
		$('#username').css("border-color", "grey")
		$('#unl').css("background-color","#3274d6")
	}else{
		$.ajax({
			url:'check_user.php',
			method:"POST",
			data:{username:username},
			success:function(data)
		{
			if(data != '0')
			{
				//$('#availability').html('<span class="text-danger">Username not available</span>');
				$('#username').css("border-color", "red")
				$('#unl').css("background-color","red")
				$('#register').attr("disabled", true);
			}
			else
			{
				//$('#availability').html('<span class="text-success">Username Available</span>');
				$('#username').css("border-color", "green")
				$('#unl').css("background-color","green")
				$('#register').attr("disabled", false);
			}
		}
		})
	}
	});
	 
	}); 