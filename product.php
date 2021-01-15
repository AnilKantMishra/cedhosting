
<?php include_once 'db_con.php'; 
class product {

    public $conprod;

    public function __construct()
    {

    $dbcon=new db_con();
    $this->conprod=$dbcon->createConnection();

    }
    public function nav()
    {
        $sql="SELECT  * FROM `tbl_product` WHERE prod_parent_id ='1' AND prod_available ='1'";

        $result = $this->conprod->query($sql);
       if($result->num_rows>0){
           return $result;
       }else{
           return false;
       }
    }  
    public function category($category,$link)
    {
            $insertcategoryhere = "INSERT INTO tbl_product( prod_parent_id,
             prod_name, prod_available, html)
            VALUES ('1','$category','1','$link')";
           
            if ($this->conprod->query($insertcategoryhere)) {
              echo "<script>alert('Inserted successfully'</script>";
              }
              else{
                echo "<script>alert('not Inserted successfully'</script>";
              }

            
     }

     public function datatableshow()
     {
         $sql="SELECT  `prod_name`,`prod_link` ,`prod_parent_id`,`prod_available` FROM `tbl_product` WHERE prod_parent_id ='1' AND prod_available ='1'";
 
         $result = $this->conprod->query($sql);
        if($result->num_rows>0){
            return $result;
        }else{
            return false;
        }
     }
     public function addproduct($selectproduct,$product,$discription,
     $monthlyprice,$annualprice,$sku)
     {
        $insertprod = "INSERT INTO `tbl_product_description`(`prod_id`, 
        `description`, `mon_price`, `annual_price`, `sku`) 
        VALUES ('$selectproduct','$discription','$monthlyprice','$annualprice','$sku')";

       $insertprod = $this->conprod->query($insertprod);

     $insertagain =  "INSERT INTO `tbl_product`( `prod_parent_id`, `prod_name`, `prod_available`, `prod_launch_date`, `html`) 
       VALUES ('$selectproduct','$product','1',NOW(),'$discription')";
       $insertagain = $this->conprod->query($insertagain);
     }

    public function jsonsselectdisc($webspacein,$bandwidthin,$freedomain,$language,$mailbox,$pageurl) { 
        $datae = array( 
          'webspacein'=> $webspacein ,
          'bandwidthin'=> $bandwidthin,
          'freedomain'=> $freedomain,
          'language'=> $language,
          'mailbox' => $mailbox,
          'pageurl' => $pageurl,); 
          return json_encode($datae); 
       
      } 

      public function showcat(){
      
        $sql = "SELECT * FROM tbl_product where prod_available = 1 AND prod_parent_id=1";

      $show= $this->conprod->query($sql);
      if($show->num_rows>0){
        
        return $show;

    }
    else{
        return false;
    }
      }


      public function viewcat(){


       $viewcategory = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product 
       JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`  AND prod_parent_id!=0";
            
      $viewcatego= $this->conprod->query($viewcategory);

            return $viewcatego;
   
     
      }
      public function editcat()
      {
          $sql="SELECT  `prod_name`,`html` FROM `tbl_product` WHERE prod_parent_id ='1' AND prod_available ='1'";
  
          $result = $this->conprod->query($sql);
         if($result->num_rows>0){
             echo $result;
         }else{
             return false;
         }
      }
      public function subcategory(){
        $subcat = "SELECT id,prod_name FROM `tbl_product` WHERE prod_parent_id =1";
        $result = $this->conprod->query($subcat);
        if($result->num_rows>0){
            echo $result;
        }else{
            return false;
        }
      }

}

?>








