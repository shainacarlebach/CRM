<?php

require_once'connection.php';
require_once'leads.php';

class products{
private $id;
private $product_name;

public function __construct($id, $product_name){
        $this->id=$id;
        $this->product_name=$product_name;
      
}

    public static function getAllProducts(){
    $con=new Connection();
    $stmt->$con->executeStatement('SELECT * from crm_products');
     while ($row =$stmt->fetch())
    {
        echo $row['product_name']."\n";
         
    }   
    }
    
}
?>

