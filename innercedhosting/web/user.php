<?php include_once 'db_con.php' ?>
<?php
class user
{

public $con;

public function __construct()
{
$dbcon=new db_con();
$this->con=$dbcon->createConnection();

}


public function userSignup($name, $email, $mobile, $security_question, $security_answer, $password)
{
$sql="INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,
`phone_approved`,`active`,`is_admin`,`password`,
`security_question`,`security_answer`)
VALUES ('$email','$name','$mobile','0','0','0','0',
'$password','$security_question','$security_answer')";
if ($this->con->query($sql)) {
echo 'Inserted successfully';// return true;
}
else{
echo 'Not inserted'; // return false;
}




}

public function login($email,$password)
{
$sql="SELECT is_admin FROM `tbl_user` where email='$email' password='$password'";
if($sql==0)
{
echo "<script>window.location href='user.php'</script>";
}
else{
echo "<script>window.location href='admin.php'</script>";
}

}

}
?>





