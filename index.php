<!DOCTYPE html>
<html>
<head>
	<title>ACSP Product Design #4</title>
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" href="css/uikit.almost-flat.css" />
	<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
	<meta charset="utf-8" />
	<meta name="description" content="ร่วมโหวตเสื้อกันหนาวโรงเรียนในโครงการ ACSP Product Design ปีที่ 4" />
	<meta name="author" content="สภานักเรียนอัสสัมชัญสมุทรปราการ"/>
	<meta property="og:type" content="website"/>
	<meta property="og:author" content="https://www.facebook.com/ACPowerParty"/>
	<meta property="og:image" content="http://acspsc.com/img/og_image.png"/>
	<meta property="og:url" content="http://acspsc.com/"/>
	<meta name="theme-color" content="#ff1e00"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!-- CODED BY เก่งมากเจ้าโดบะ & Wiput Development-->
</head>
<body>
	<div class="hero">
		<div class="uk-container uk-container-center none" id="n_failed">
			<div class="uk-alert uk-alert-large uk-alert-danger uk-animation-shake">โหวตไม่สำเร็จ</div>
		</div>
		<div class="uk-container uk-container-center none" id="n_failed">
			<div class="uk-alert uk-alert-large uk-alert-danger uk-animation-shake">คุณโหวตไปแล้ว</div>
		</div>
		<div class="uk-container uk-container-center none" id="n_success">
			<div class="uk-alert uk-alert-large uk-alert-success uk-animation-slide-top">โหวตเรียบร้อย</div>
		</div>
		<center><img src="img/logo.png" class="logo" /></center>
		<center><img src="img/hero.png" class="hero" /></center>
		<center><iframe class="video" src="https://www.youtube.com/embed/Ny4n2VZ1-xA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></center>
	</div>
	<div class="votes-open">
		<center><img src="img/votes_open.png" class="text" /></center>
	</div>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<a href="img/v1_full.jpg" data-uk-lightbox="{group:'style'}">
						<img class="uk-thumbnail" src="img/v1_thumb.jpg" width="100%" />
						<img class="uk-thumbnail uk-overlay-panel uk-overlay-image uk-overlay-fade" src="img/v1_thumb_h.jpg" width="100%" />
					</a>
				</figure>
			</div>
			<div class="uk-width-medium-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<a href="img/v2_full.jpg" data-uk-lightbox="{group:'style'}">
						<img class="uk-thumbnail" src="img/v2_thumb.jpg" width="100%" />
						<img class="uk-thumbnail uk-overlay-panel uk-overlay-image uk-overlay-fade" src="img/v2_thumb_h.jpg" width="100%" />
					</a>
				</figure>
			</div>
			<div class="uk-width-medium-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<a href="img/v3_full.jpg" data-uk-lightbox="{group:'style'}">
						<img class="uk-thumbnail" src="img/v3_thumb.jpg" width="100%" />
						<img class="uk-thumbnail uk-overlay-panel uk-overlay-image uk-overlay-fade" src="img/v3_thumb_h.jpg" width="100%" />
					</a>
				</figure>
			</div>
			<div class="uk-width-medium-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<a href="img/v4_full.jpg" data-uk-lightbox="{group:'style'}">
						<img class="uk-thumbnail" src="img/v4_thumb.jpg" width="100%" />
						<img class="uk-thumbnail uk-overlay-panel uk-overlay-image uk-overlay-fade" src="img/v4_thumb_h.jpg" width="100%" />
					</a>
				</figure>
			</div>
		</div>
	</div>
	<div class="vote">
		<div class="uk-container uk-container-center">
			<form class="uk-form" method="post">
				<div class="uk-grid uk-grid-medium">
					<div class="uk-width-medium-1-2">
						<fieldset>
							<div class="uk-form-row">
								<div class="uk-form-select uk-width-1-1" data-uk-form-select>
									<select class="uk-button uk-form-large uk-width-1-1" name="style" id="style">
										<option value="0">คลิกที่นี่เพื่อเลือกแบบที่ต้องการโหวต</option>
										<option value="1">โหวตแบบที่ 1</option>
										<option value="2">โหวตแบบที่ 2</option>
										<option value="3">โหวตแบบที่ 3</option>
										<option value="4">โหวตแบบที่ 4</option>
									</select>
								</div>
							</div>
							<div class="uk-form-row">
								<input type="text" placeholder="เลขประจำตัวนักเรียน 5 หลัก" name="id" id="id" class="uk-form-large uk-width-1-1">
							</div>
							<div class="uk-form-row">
								<a class="uk-button uk-button-primary uk-button-large uk-width-1-1" type="submit" name="submit" onclick="vote()">ส่งข้อมูล</a>
							</div>
						</fieldset>
					</div>
					<div class="uk-width-medium-1-2">
						<h2>รายละเอียดการโหวต</h2>
						<ol>
							<li>นักเรียน 1 คนสามารถโหวตได้เพียงแบบเดียวเท่านั้น</li>
							<li>นักเรียน 1 คนสามารถโหวตได้เพียงครั้งเดียวเท่านั้น</li>
							<li>ชื่อและเลขประจำตัวใช้เพื่อการยืนยันความเป็นนักเรียนเท่านั้น</li>
							<li>หากพบว่าข้อมูลในข้อ 3. เป็นเท็จจะไม่นับคะแนนเสียงดังกล่าว</li>
							<li>ต้องเป็นศิษย์ปัจจุบัน (ปีการศึกษา 2559) เท่านั้น</li>
							<li>กรณีที่คะแนนเสียงเท่ากัน จะตัดสินจากคะแนนสุดท้ายที่เข้ามาก่อน</li>
							<li>การตัดสินของคณะกรรมการถือเป็นที่สิ้นสุด</li>
						</ol>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/components/lightbox.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/ajax-vote.js"></script>
	<footer>
		<center>สภานักเรียน</center>
	</footer>
</body>
</html>