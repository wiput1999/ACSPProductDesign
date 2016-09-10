function vote () {
	var id 		=	$('#id').val();
	var style	=	$('#style').val();

	$.ajax({
		type: 'POST',
		url: 'info.php',
		cache: false,
		data: { 'id' : id },
		success: function(result){
			swal({
				title: "กรุณาตรวจสอบข้อมูลให้ถูกต้อง",
				text: "<img src='https://cdn.wiput.me/acsp/" + id + ".jpg' style='max-width: 40% !important;'><br><br>เลขประจำตัว : " + id + "<br>ชื่อ : " + result + "<br><b>หากโหวตแล้วจะไม่สามารถแก้ไขข้อมูลได้</b>",
				html: true,
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#A5DC86",
				confirmButtonText: "ตกลง",
				cancelButtonText: "แก้ไขข้อมูล",
				closeOnConfirm: false,
				closeOnCancel: false,
				showLoaderOnConfirm: true }, function(isConfirm){
					if (isConfirm) {
						$.ajax({
							type: 'POST',
							url: 'vote.php',
							cache: false,
							data: { 'id' : id , 'style' : style },
							success: function(result){
								switch (result) {
									case "success" :
										setTimeout(function(){
											swal("โหวตสำเร็จ", "ขอบคุณสำหรับความร่วมมือครับ :D", "success");
										}, 500);
										break;
									case "failed" :
										setTimeout(function(){
											swal("โหวตไม่สำเร็จ", "ห้ามโหวตซ้ำนะครับ :(", "error");
										}, 500);
								}
							}
						});
					} else {
						swal("ยกเลิกแล้ว", "กรุณาตรวจสอบข้อมูลใหม่ดีๆนะครับ :)", "error");
					} 
			});
		}
	});
}