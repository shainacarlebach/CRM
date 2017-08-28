<?php

require_once'connection.php';
require_once'prospects.php';

class customers{
private $id;
private $customer_name;
private $customer_phone;
private $customer_profession;
private $prospect_id;


public function __construct($id, $customer_name,$customer_phone,$customer_profession, $prospect_id){
        $this->id=$id;
        $this->customer_name=$customer_name;
        $this->customer_phone=$customer_phone;
        $this->customer_profession=$customer_profession;
        $this->prospect_id=$prospect_id;
}

    public static function getAllCustomers(){
    $con=new Connection();
    $stmt->$con->executeStatement('SELECT * from crm_customers');
     while ($row =$stmt->fetch())
    {
        echo $row['customer_name']."\n";
        echo $row['customer_phone']."\n";
        echo $row['customer_profession']."\n";
        echo $row['prospect_id']."\n";
  
    }   
    }
    
}
?>

