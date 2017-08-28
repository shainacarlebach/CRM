<?php

require_once'connection.php';
require_once'prospects.php';

class professions{
private $professions_id;
private $professions_name; 

public function __construct($professions_id, $professions_name){
        $this->professions_id=$professions_id; 
        $this->professions_name=$professions_name;
}

    public static function getAllProfessions(){
    $con=new Connection();
    $stmt->$con->executeStatement('SELECT * from crm_professions');
     while ($row =$stmt->fetch())
    {
        echo $row['professions_id']."\n";
        echo $row['professions_name']."\n";
        
    }   
    }
    
}
?>
