$(document).ready(function(){
	$(".duzen").click(function(){
		var id=$(this).attr("id");
		var durum=$(this).is(":checked")?'1':'0';
		$.ajax({
			url:"akillibil.php",
			data:{id:id,durum:durum},
			type:"post",
			success:function(e){
				alert(e);
			}
		})
	});
});