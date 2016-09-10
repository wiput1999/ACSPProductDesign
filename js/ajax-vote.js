function vote () {
	var id 		=	$('#id').val();
	var style	=	$('#style').val();

	if (style == 0) {
		swal("โหวตไม่สำเร็จ", "กรุณาเลือกตัวเลือกที่จะโหวตด้วยครับ :(", "error");
	}
	else {
		$.ajax({
			type: 'POST',
			url: 'info.php',
			cache: false,
			data: { 'id' : id },
			success: function(result){
				if( result == "notfound" ) {
					swal("โหวตไม่สำเร็จ", "ไม่พบรหัสประจำตัวที่ท่านระบุครับ :(", "error");
				}
				else {
					swal({
						title: "กรุณาตรวจสอบข้อมูลให้ถูกต้อง",
						html: "<img src='https://cdn.wiput.me/acsp/" + id + ".jpg' style='max-width: 40% !important;'><br><br>เลขประจำตัว : " + id + "<br>ชื่อ : " + result + "<br><b>หากโหวตแล้วจะไม่สามารถแก้ไขข้อมูลได้</b>",
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: "#A5DC86",
						confirmButtonText: "ตกลง",
						cancelButtonText: "แก้ไขข้อมูล",
						showLoaderOnConfirm: true,
						showLoaderOnConfirm: true }).then(function() {
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
						}, function(dismiss) {
							if (dismiss === 'cancel') {
								swal("ยกเลิกแล้ว", "กรุณาตรวจสอบข้อมูลใหม่ดีๆนะครับ :)", "error");
							}
						});
					}
				}
			});
	}
}