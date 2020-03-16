<?php require("./lib/phpmailer/PHPMailerAutoload.php");?>
<?php
header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;


$gmail_username = "mayple.se63@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "adminpass"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


$sender = "CPE KPS Support"; // ชื่อผู้ส่ง
// $email_sender = "XXXX"; // เมล์ผู้ส่ง 
$email_receiver = "keadtiphan56@gmail.com"; // เมล์ผู้รับ ***

$subject = "อนุมัติการยืมสำเร็จ"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($gmail_username, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$email_content = "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8'/>
			<title>ทดสอบการส่ง Email</title>
		</head>
		<body>
			<center><h1 style='background: #3b434c;padding: 10px 0 20px 10px;margin-bottom:10px;font-size:28px;color:white;' >
				<center> >> อนุมัติรายการยืมสำเร็จ << <center>
			
			</h1><center>
			<div style='padding:20px;'>
				<div style='text-align:center;margin-bottom:50px;'>
					<img style='width:250px;height:250px;'src='https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.0-9/26166724_1201693619964370_5174147735145290156_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_eui2=AeEbag1ZL5nui6BYcmUaHsOh5BH69-hBUVXNGkhU-XjQ7Q7ldTFV0HE4qAepwiM0gqCRiEPceCyipPSAXkKclD4V0TpplzXraumhv8VZTjEeEg&_nc_ohc=LdjvCr-eNrUAX-Xdx9n&_nc_ht=scontent.fbkk2-7.fna&oh=2d16a9b827fd35054921df12a1fea86f&oe=5E94B352' style='width:100%' />					
				</div>
				<div>				
					<h2>รายการยืมอุปกรณ์ของท่านได้รับการอนุมัติสำเร็จ : <strong style='color:#0000ff;'></strong></h2>
				</div>
				<div>
					<h1><strong style='color:#3c83f9;font-size:16px;'> <a href='http://158.108.207.4/se62_10/'> >> กรุณาติดต่อขอรับอุปกรณ์ได้ที่ << </a> <br> <strong style='color:black;font-size:16px;'> ภาควิชาวิศวกรรมคอมพิวเตอร์ <br> มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน  </strong></strong>
						<br> <strong style='color:gray;font-size:16px;'>วันที่ทำรายการ :<br> รายการอุปกรณ์ :<br>*หมายเหตุ กรุณามารับอุปกรณ์ภายในวันที่ :</strong> </h1>
				</div>
				<div style='margin-top:30px;'>
					<hr>
					<address>
						<h4>ติดต่อสอบถาม</h4>
						<p>Department of Computer Engineering <br> at Kamphaeng Saen </p>
						<p>www.cpe.eng.kps.ku.ac.th</p>
					</address>
				</div>
			</div>
			<div style='background: #3b434c;color: #a2abb7;padding:30px;'>
				<div style='text-align:center'> 
					2020 © CPE KPS
				</div>
			</div>
		</body>
	</html>
";

//  ถ้ามี email ผู้รับ
if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {  // สั่งให้ส่ง email

		// กรณีส่ง email ไม่สำเร็จ
		echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
		echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
	}else{
		// กรณีส่ง email สำเร็จ
		echo "ระบบได้ส่งข้อความไปเรียบร้อย";
	}	
}



?>