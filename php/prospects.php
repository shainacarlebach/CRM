<?php

require_once'connection.php';
require_once'leads.php';

class prospects{
private $id;
private $prospect_name;
private $prospect_phone;
private $lead_id;


public function __construct($id, $prospect_name,$prospect_phone, $lead_id){
        $this->id=$id;
        $this->prospect_name=$prospect_name;
        $this->prospect_phone=$prospect_phone;
        $this->lead_id=$lead_id;
}

    public static function getAllProspects(){
    $con=new Connection();
    $stmt->$con->executeStatement('SELECT * from crm_prospects');
     while ($row =$stmt->fetch())
    {
        echo $row['prospect_name']."\n";
        echo $row['prospect_phone']."\n";
        echo $row['lead_id']."\n";
  
    }   
    }
    
}
?>

