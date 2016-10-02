function vote () {
	var id 		=	$('#id').val();
	var style	=	$('#style').val();
	var captcha	=	grecaptcha.getResponse().length;

	if (style == 0) {
		swal({
			title: "โหวตไม่สำเร็จ",
			text : "กรุณาเลือกตัวเลือกที่จะโหวตด้วยครับ :(",
			type : "error",
			allowOutsideClick: false
		});
	}
	else {
		$.ajax({
			type: 'POST',
			url: 'info.php',
			cache: false,
			data: { 'id' : id , 'captcha' : captcha},
			success: function(result){
				if( result === "notfound" ) {
					swal({
						title: "โหวตไม่สำเร็จ",
						text : "ไม่พบรหัสประจำตัวที่ท่านระบุครับ :(",
						type : "error",
						allowOutsideClick: false
					});
				}
				else {
					swal({
						title: "กรุณาตรวจสอบข้อมูลให้ถูกต้อง",
						html: "<img src='https://cdn.wiput.me/acsp/" + id + ".jpg' style='height: 217px !important;'><br><br>เลขประจำตัว : " + id + "<br>ชื่อ : " + result + "<br><b>หากโหวตแล้วจะไม่สามารถแก้ไขข้อมูลได้</b>",
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: "#A5DC86",
						confirmButtonText: "ตกลง",
						cancelButtonText: "แก้ไขข้อมูล",
						showLoaderOnConfirm: true,
						allowOutsideClick: false,
						showLoaderOnConfirm: true }).then(function() {
							$.ajax({
								type: 'POST',
								url: 'vote.php',
								cache: false,
								data: { 'id' : id , 'style' : style , 'captcha' : captcha},
								success: function(result){
									switch (result) {
										case "success" :
											swal({
												title: "โหวตสำเร็จ",
												text : "ขอบคุณสำหรับความร่วมมือครับ :D",
												type : "success",
												allowOutsideClick: false
											});
										break;
										case "failed" :
											swal({
												title: "โหวตไม่สำเร็จ",
												text : "ห้ามโหวตซ้ำนะครับ :(",
												type : "error",
												allowOutsideClick: false
											});
									}
								}
							});
						}, function(dismiss) {
							if (dismiss === 'cancel') {
								
							}
						});
					}
				}
			});
	}
}