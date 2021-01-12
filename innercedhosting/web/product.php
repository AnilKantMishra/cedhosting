
<?php include_once 'db_con.php'; 
class product{

    public $conprod;

    public function __construct()
    {
    $dbcon=new db_con();
    $this->conprod=$dbcon->createConnection();

    }

    public function nav()
    {
    $sql="SELECT prod_name  FROM tbl_product WHERE prod_parent_id ='1' AND prod_available ='1'";
 

    }
   



}

?>








?>