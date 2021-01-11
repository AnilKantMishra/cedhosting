<?php
class db_con
 {
    public $dcn;
        function __construct()
        {
            $con = mysqli_connect("localhost","root","","CedHosting");

            $this->dcn = $con;

            if(mysqli_connect_errno()){
                echo "failed to connect database" .mysqli_connect_errno();
            }
            else{
                echo "Successfully Connected";
            }

        }
}
$obj =  new db_con();

?>