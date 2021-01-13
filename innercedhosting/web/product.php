
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
        $sql="SELECT  `prod_name`,`prod_link` FROM `tbl_product` WHERE prod_parent_id ='1' AND prod_available ='1'";

        $result = $this->conprod->query($sql);
       if($result->num_rows>0){
           return $result;
       }else{
           return false;
       }
    }
   



}

?>








