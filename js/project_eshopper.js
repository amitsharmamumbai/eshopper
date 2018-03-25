// alert("test")
$(document).ready(function(){
	// alert("test");
	$(".btn-register").click(function(){
		// alert("test");

		// console.log($("#register_form"));
		record = $("#register_form").serialize();
		// console.log(record);
		$.ajax({
			type:"post",
			url:"register-action.php",
			data:record,
			success:function(response){
				// console.log(response);
				$(".msg").html(response);
			},
			error:function(errmsg){
				console.log(errmsg);
			}
		})
	});
	//////////////////////////////////////////////////

	$(".btn-cat").click(function(){
		// alert(1)
		$.ajax({
			type:"post",url:"category-action.php",
			data:$("#categoey_form").serialize(),
			success:function(response){
				$(".msg").html(response);
			},
			error:function(errmsg){
				console.log(errmsg);
			}
		})
	})
	//////////////////////////////////////////////
	$(".add-to-cart").click(function(aobj){
		// alert(1)
		// console.log(aobj);
		aobj.preventDefault();
		val = $(this).attr("for");
		// alert(val);
		// alert("proid="+val);
		$.ajax({
			type:"post",url:"cart-action.php",
			data:"proid="+val,
			success:function(res){
				alert(res);
			},
			error:function(error)
			{
				console.log(error);
			}
		});
	});

	$(".delete-to-cart").click(function(aobj){
		// alert(1)
		aobj.preventDefault();
		val = $(this).attr("for");
		// alert(val);
		$.ajax({
			type:"post",url:"delete-cart-action.php",
			data:"proid="+val,
			success:function(res){
				// alert(res);
				alert("Product Deleted");
				window.location.reload();
			},
			error:function(error)
			{
				console.log(error);
			}
		});
	});
	//////////////////////////////////////////////
});