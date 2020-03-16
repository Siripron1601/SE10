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

$subject = "แจ้งรายการขออนุมัติการยืมของภาควิชาวิศวกรรมคอมพิวเตอร์"; // หัวข้อเมล์


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
			<center><h1 style='background: #e5e7e9;padding: 5px 0 10px 5px;margin-bottom:5px;font-size:20px;color:blue;' >
				<center> >> โปรดยืนยันเพื่ออนุมัติรายการยืมของภาควิชาวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน << <center>
			
			</h1><center>
			<div style='font-size:16px;'>
			</div>
			</div><b>เรียน คุณ<br>
			เรื่อง อนุมัติรายการยืมอุปกรณ์ของภาควิชาวิศวกรรมคอมพิวเตอร์</b><br><br>
			 
			ระบบยืมคืนอุปกรณ์ภาควิชาวิศวกรรมคอมพิวเตอร์ ขอเรียนให้ท่<wbr>านทราบว่า มีรายการขอยืมอุปกรณ์รอการอนุมัติ <wbr>โปรดยืนยันรายการยืม-คืนอุปกรณ์ เพื่ออนุมัติรายการยืม<br><br>
			รายการยืม-คืนอุปกรณ์<br>(ใส่ตารางรายการจากฐานข้อมูลตรงนี้เลย)<br><br><br>
	
			
			<b>หมายเหตุ: </b>หากไม่อนุมัติรายการยืม โปรดระบุเหตุผลไม่อนุมัติรายการยืม<br><br>
			
			สอบถามข้อมูลเพิ่มเติมได้ที่: <br>
			- ภาควิชาวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน<br>
			- Website: www.cpe.eng.kps.ku.ac.th <br>


			******************************<wbr>******************************<wbr>******************************<wbr>***<br>
			</div>
			</div>
			<div style='padding:20px;'>
				<div style='text-align:center;margin-bottom:50px;'>
				<div>				
					
				
						<h1><strong style='color:#3c83f9;font-size:16px;'> <a href='http://158.108.207.4/se62_10/'> >> กดเข้าสู่ระบบเพื่ออนุมัติรายการยืม  << </a>   </strong> </h1>
					
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