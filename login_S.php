<?php
//Update : 14/10/51
//By : OCS KU
//Version : 1.1
/*
#### Changlog ####
Version 1.1
- Cleanup php warning
- Change position to define zonename 
- Username <- Before use, cut * and change to lowercase
- Fix Bug Version 1.0
*/
//Function Ldap Authen
function ldap_authen($server,$base_dn,$useraccount,$password){
    //include 'ldap.php';
    $ldapserver = ldap_connect($server);
//	If Server Ldap Version=3
//  ldap_set_option($ldapserver,LDAP_OPT_PROTOCOL_VERSION,3);
    ldap_set_option($ldapserver, LDAP_OPT_TIMELIMIT, 6);
    $bind = @ldap_bind($ldapserver);
    $authen = "true";
    if(!$bind)
    {
		  echo "<div align='center'>Server ".$server." not found</div><br>";
          $authen = "false";
    }
    $filter = "uid=" . $useraccount;
    $inforequired = array("uid");
    $result = @ldap_search($ldapserver,$base_dn,$filter,$inforequired);
    $info = @ldap_get_entries($ldapserver,$result);
    if(!$result)
    {
				echo "<div align='center'>Account not found on Server = ".$server."</div><br>";
                $authen = "false";
    }
	//Count = 1, True 		<- found account
	//Count = 0,>1 False 	<- not found account or found more than 1 account 
    if($info["count"] == 0)
    {
                $authen = "false";
    }
    if($info["count"] > 1)
    {
                $authen = "false";
    }
	if(isset($info[0]["dn"])){
  	  	$user_dn = $info[0]["dn"];
	}else{
		$user_dn = "";
	}
	//use dn for authen with password
    $bind = @ldap_bind($ldapserver,$user_dn,$password);
    if(!$bind)
    {
				echo "<div align='center'>Authen Fail on Server = ".$server."</div><br>";
                $authen = "false";
    }

    ldap_close($ldapserver);

    return($authen);
}
//Define Zone (Authen Zone)
if(isset($_POST['zone'])){
	$zone = $_POST['zone'];
}else{
	//Default Authen Zone (Login Web)
	$zone = 0;
}
//If submit action
if (isset($_POST['username'])&&isset($_POST['password'])){
	//Cut *,space and lowercase -> username (Ldap authen pass with * and space)
	$_POST['username']=str_replace("*","",strtolower(trim($_POST['username'])));
	//Check username and password not blank
	if(($_POST['username']<>"")&&($_POST['password']<>"")){
		// Array 1 = Server Set
		// Array 2 -> 0 = Base Dn
		// Array 2 -> 1,2,3,4 = Ldap Server Name or IP (Priority)
		// Note : Each Ldap Server can authen all OU (But better authen nearly network)
		//Bkn
		$authenzone[0][0]="ou=bkn,dc=ku,dc=ac,dc=th";
		$authenzone[0][1]="ldap.ku.ac.th";
		$authenzone[0][2]="ldap2.ku.ac.th";
		$authenzone[0][3]="ldap.src.ku.ac.th";
		$authenzone[0][4]="ldap.csc.ku.ac.th";
		//Kampangsan
		$authenzone[1][0]="ou=kps,dc=ku,dc=ac,dc=th";
		$authenzone[1][1]="ldap.kps.ku.ac.th";
		$authenzone[1][2]="ldap.ku.ac.th";
		$authenzone[1][3]="ldap2.ku.ac.th";
		//Sriracha
		$authenzone[2][0]="ou=src,dc=ku,dc=ac,dc=th";
		$authenzone[2][1]="ldap.src.ku.ac.th";
		$authenzone[2][2]="ldap.ku.ac.th";
		$authenzone[2][3]="ldap2.ku.ac.th";
		//Sakonnakorn
		$authenzone[3][0]="ou=csc,dc=ku,dc=ac,dc=th";
		$authenzone[3][1]="ldap.csc.ku.ac.th";
		$authenzone[3][2]="ldap.ku.ac.th";
		$authenzone[3][3]="ldap2.ku.ac.th";	$authen = "false";
		$i=1;
		while($i<count($authenzone[$zone])){
		$authen = ldap_authen($authenzone[$zone][$i],$authenzone[$zone][0],$_POST['username'],$_POST['password']);
			if($authen=="true"){
				$i=count($authenzone[$zone]);
				// Set variable zonename use to insert database (bkn,kps,src,csc)
				$zonename=substr($authenzone[$zone][0],3,3);
			}else{
				$i+=1;
			}
		}
		if($authen=="true"){
      //$info = user_authen($_POST['username'],$_POST['password']);
			//Rediect to next url here
      //header("location:http://www.ku.ac.th");
      // print_r($info);
			echo "<div align='center'>Authen Pass User = ".$_POST['username'].", Zone = ".strtoupper($zonename)."</div><br>";
		}else{
			$loginfail="true";
		}
	}else{
		$loginfail2="true";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Nontri Ldap Authentication Demo</title>
</head>
<body>
<form action="login.php" method="POST" name="loginform">
  <br />
  <table width="310" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeedd""><tr><td><div align="left">
    <table width="310" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeedd"">
      <tr>
        <td height="61" colspan="3"><div align="right">Nontri LDAP Authentication &nbsp;<br />
        </div></td>
      </tr>
      <tr>
        <td width="122" height="36"><div align="right">Username : </div></td>
        <td width="10"><div align="center"></div></td>
        <td width="174"><div align="left">
            <input name="username" type="text" size="20" />
        </div></td>
      </tr>
      <tr>
        <td height="35"><div align="right" >Password : </div></td>
        <td><div align="center"></div></td>
        <td><div align="left">
            <input name="password" type="password" id="password" size="20" />
        </div></td>
      </tr>
      <tr>
        <td height="29"><div align="right" class="strong3">Campus : </div></td>
        <td colspan="2"><div align="left">&nbsp;&nbsp;
                <select name="zone" id="zone">
                  <option value="0" <?php if($zone=="0"){ echo "selected='selected'"; } ?>>Bangkhen</option>
                  <option value="1" <?php if($zone=="1"){ echo "selected='selected'"; } ?>>Kampangsan</option>
                  <option value="2" <?php if($zone=="2"){ echo "selected='selected'"; } ?>>Sriracha</option>
                  <option value="3" <?php if($zone=="3"){ echo "selected='selected'"; } ?>>Sakonnakhon</option>
                </select>
        </div></td>
      </tr>
      <tr>
        <td height="40" colspan="3"><div align="center">
            <input name="submit" type="submit" value="Login" />
          &nbsp;&nbsp;
          <input name="Reset" type="reset" value="Clear" />
        </div></td>
      </tr>
    </table>
  </div></td>    </tr>
  </table>
<?php
//If login fail
if(isset($loginfail)){ 
?>
  <p align="center" class="loginfail">The username or password is invalid.</p>
<?php
} 
//If login fail
if(isset($loginfail2)){ 
?>
  <p align="center" class="loginfail">The username or password is blank.</p>
<?php
} 
?>
</form>
</body>
</html>
