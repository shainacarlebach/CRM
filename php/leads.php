<?php

require_once'connection.php';

class leads{
private $id;
private $lead_name;
private $lead_phone;
private $product_id;


public function __construct($id, $lead_name,$lead_phone, $product_id){
        $this->id=$id;
        $this->lead_name=$lead_name;
        $this->lead_phone=$lead_phone;
        $this->product_id=$product_id;
}

    public static function getAllLeads(){
    $con=new Connection();
    $stmt->$con->executeStatement('SELECT * from crm_leads');
     while ($row =$stmt->fetch())
    {
        echo $row['lead_name']."\n";
        echo $row['lead_phone']."\n";
        echo $row['product_id']."\n";
  
    }   
    }
    
}
?>


