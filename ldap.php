<?php
session_start();
include_once ("query.php");
//username password ที่ใช้เป็นตัวกลางในการเข้าเซิฟเวอร์
$username = $_POST['username']??"";
$password = $_POST['password']??"";
$username2 = "";
$ldap_error = array(
	"ERR-000: OK",
	"ERR-001: Bind error",
	"ERR-002: Anonymous search failed",
	"ERR-003: User unknown",
	"ERR-004: More than one such user",
	"ERR-005: bind failed. user not authenticated."
);

$ldap_uid			= "";
$ldap_first_name_eng = "";
$ldap_last_name_eng = "";
$ldap_first_name	= "";
$ldap_last_name		= "";
$ldap_email			= "";
$ldap_gender		= "";
$ldap_Job			= "";
$ldap_department	= "";
$ldap_faculty		= "";
$ldap_major_id		= "";
$ldap_campus		= "";		//รหัสวิทยาเขต ดังนี้ บางเขน=B , กำแพงแสน=K , ศรีราชา=S , สกลนคร=C
$ldap_idcode		= "";		//รหัสประจำตัวนิสิต




function user_authen($username, $ldappass, $filter1 = "")
{
	$host1   = "ldap.ku.ac.th";
	$host2   = "ldap2.ku.ac.th";
	$host3   = "ldap3.ku.ac.th";
	$base_dn = "dc=ku,dc=ac,dc=th";

	$ldapserver = ldap_connect($host1);
	if (!$ldapserver) {
		$ldapserver = ldap_connect($host2);
		if (!$ldapserver) {
			$ldapserver = ldap_connect($host3);
		}
	}

	$bind = ldap_bind($ldapserver);
	if (!$bind) {
		return (1);
	}

	$filter = "uid=" . $filter1;
	//$filter = "(&(department-id=K0816)(campus=K))"; //ค้นหาตามid ภาควิชา
	$result = ldap_search($ldapserver, $base_dn, $filter);
	$info = ldap_get_entries($ldapserver, $result);
	$user_dn = $info[0]["dn"];

	$bind = @ldap_bind($ldapserver, $user_dn, $ldappass);
	if(!$bind)
    {
				return null;
	}
	else{
		return $info;
	}
	
}

?>
<!-- <form action="ldap.php" method="POST" name="loginform">

	<td width="122" height="36">
		<div>Username : </div>
	</td>
	<td width="174">
		<div>
			<input name="username" type="text" size="20" />
			<input name="password" type="text" size="20" />
		</div>
	</td>

	<input name="submit" type="submit" value="Login" />



</form> -->
<?php


if($username==""||$password=="")
{
    header("Location: index.php?error=กรอกข้อมูลไม่ครบ!");
}
else{
	$info = (user_authen($username2, $password, $username));
	if($info[0]["uid"][0]==""){
		header("Location: index.php?error=รหัสผู้ใช้หรือรหัสผิด!");
	}
	else{
		

		$stml = get_User($info[0]["idcode"][0]);
		while ($DB_user = $stml->fetch(PDO::FETCH_OBJ)){
			$uid = $DB_user->uid;
			$formalId = $DB_user->formalId;
			$title = $DB_user->title;
			$firstname = $DB_user->firstname;
			$lastname = $DB_user->lastname;
			$status = $DB_user->status;
			$isAdmin = $DB_user->isAdmin;
			$email = $DB_user->email;
		}
		if($uid==""){
			Add_User($info[0]["idcode"][0],)
		}
		else{
			if($status==1){
				header("Location: index.php?error=อาจารย์!");
			}elseif($status==2){
				header("Location: index.php?error=แอมมิน!");
			}elseif($status==3){
				header("Location: index.php?error=ผู้ยืม!");
			}else{
				header("Location: index.php?error=เกินข้อผิดพราด!");
			}
		}
		
	}
}
// การดึงข้อมูลที่ต้องการ
// if (isset($_POST['username'])) {
// 	$info = (user_authen($username, $_POST['password'], $_POST['username'])); // id
	// if ($info[0]["type-person"][0] == "3") {
	// 	//นิสิต
	// 	echo "uid=" . $info[0]["uid"][0] . "</br>";
	// 	echo "givenname=" . $info[0]["givenname"][0] . "</br>";
	// 	echo "sn=" . $info[0]["sn"][0] . "</br>";
	// 	echo "first-name=" . $info[0]["first-name"][0] . "</br>";
	// 	echo "last-name=" . $info[0]["last-name"][0] . "</br>";
	// 	echo "gender=" . $info[0]["gender"][0] . "</br>";
	// 	echo "mail=" . $info[0]["google-mail"][0] . "</br>";
	// 	echo "faculty=" . $info[0]["faculty"][0] . "</br>";
	// 	echo "campus=" . $info[0]["campus"][0] . "</br>";
	// 	echo "idcode=" . $info[0]["idcode"][0] . "</br>";
	// 	echo "birthday=" . $info[0]["birthday"][0] . "</br>";
	// 	echo "advisor-id=" . $info[0]["advisor-id"][0] . "</br>";
	// 	echo "major-id=" . $info[0]["major-id"][0] . "</br>";
	// 	echo "type-person=" . $info[0]["type-person"][0] . "</br>";
	// 	echo "objectclass=" . $info[0]["objectclass"][0] . "</br>";
	// 	echo "position=" . $info[0]["position"][0] . "</br>";
	// 	echo "thaiprename=" . $info[0]["thaiprename"][0] . "</br>";
	// 	echo "thainame=" . $info[0]["thainame"][0] . "</br>";
	// } else if ($info[0]["type-person"][0] == "1") {
	// 	//อาจารย์
	// 	echo "uid=" . $info[0]["uid"][0] . "</br>";
	// 	echo "telephonenumber=" . $info[0]["telephonenumber"][0] . "</br>";
	// 	echo "google-mail=" . $info[0]["google-mail"][0] . "</br>";
	// 	echo "campus=" . $info[0]["campus"][0] . "</br>";
	// 	echo "gender=" . $info[0]["gender"][0] . "</br>";
	// 	echo "jobtype=" . $info[0]["jobtype"][0] . "</br>";
	// 	echo "position=" . $info[0]["position"][0] . "</br>";
	// 	echo "department=" . $info[0]["department"][0] . "</br>";
	// 	echo "department-id=" . $info[0]["department-id"][0] . "</br>";
	// 	echo "faculty=" . $info[0]["faculty"][0] . "</br>";
	// 	echo "faculty-id=" . $info[0]["faculty-id"][0] . "</br>";
	// 	echo "birthday=" . $info[0]["birthday"][0] . "</br>";
	// 	echo "thaiprename=" . $info[0]["thaiprename"][0] . "</br>";
	// 	echo "first-name=" . $info[0]["first-name"][0] . "</br>";
	// 	echo "last-name=" . $info[0]["last-name"][0] . "</br>";
	// 	echo "thainame=" . $info[0]["thainame"][0] . "</br>";
	// 	echo "gecos=" . $info[0]["gecos"][0] . "</br>";
	// 	echo "advisor-id=" . $info[0]["advisor-id"][0] . "</br>";
	// 	echo "type-person=" . $info[0]["type-person"][0] . "</br>";
	// 	echo "cn=" . $info[0]["cn"][0] . "</br>";
	// } else {
	// 	//อื่นๆ
	// 	foreach ($info as $p) {
	// 		echo "uid=" . $p["uid"][0] . "</br>";
	// 		echo "telephonenumber=" . $p["telephonenumber"][0] . "</br>";
	// 		echo "google-mail=" . $p["google-mail"][0] . "</br>";
	// 		echo "campus=" . $p["campus"][0] . "</br>";
	// 		echo "gender=" . $p["gender"][0] . "</br>";
	// 		echo "jobtype=" . $p["jobtype"][0] . "</br>";
	// 		echo "position=" . $p["position"][0] . "</br>";
	// 		echo "department=" . $p["department"][0] . "</br>";
	// 		echo "department-id=" . $p["department-id"][0] . "</br>";
	// 		echo "faculty=" . $p["faculty"][0] . "</br>";
	// 		echo "faculty-id=" . $p["faculty-id"][0] . "</br>";
	// 		echo "birthday=" . $p["birthday"][0] . "</br>";
	// 		echo "thaiprename=" . $p["thaiprename"][0] . "</br>";
	// 		echo "first-name=" . $p["first-name"][0] . "</br>";
	// 		echo "last-name=" . $p["last-name"][0] . "</br>";
	// 		echo "thainame=" . $p["thainame"][0] . "</br>";
	// 		echo "gecos=" . $p["gecos"][0] . "</br>";
	// 		echo "advisor-id=" . $p["advisor-id"][0] . "</br>";
	// 		echo "type-person=" . $p["type-person"][0] . "</br>";
	// 		echo "cn=" . $p["cn"][0] . "</br>";
	// 		echo "</br></br>";
	// 	}
	// }
// }
?>