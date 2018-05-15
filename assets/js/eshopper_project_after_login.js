$(document).ready(function(){
	//alert("TEST")
	 $(".btn-update").click(function(){
	 	records=$("#update_form").serialize()
	 		//alert(records)
	 		$.post("../controllers/password-action.php",records).success(function(res){
				//console.log(res);
				$(".msg_update").html(res);
	 		})
	 	
	 })
})