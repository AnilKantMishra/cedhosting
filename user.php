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
                            echo 'Inserted successfully';
                            }
                            else{
                            echo 'Not inserted';
                            }

                     }

            public function login($email,$password)
            {
            $sql="SELECT * FROM tbl_user where email='$email' AND password='$password'";
            $result = $this->con->query($sql);

            $row = $result->fetch_assoc();
              
            
            if( $row['is_admin']=='1')
            {
                echo "<script>window.location.href='admin/examples/dashboard.php'</script>";
           
            }
            elseif(( $row['is_admin']=='0')){
                echo "<script>alert('user')</script>";
            }
            else{
                echo "<script>alert('User is not registered')</script>";
            }
            }

}
?>





