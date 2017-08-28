<?php

require_once'connection.php';
require_once'leads.php';
require_once'prospects.php';
require_once'customers.php';
require_once'products.php';
require_once 'professions.php';

class BusinessLogicLayer{
  private $table_name; 
  private $_results = array();
  private $query;
  private $conds;


  public function __construct(){}
 
  public static function get($var){  
    if (isset($this->_results[$var])){
      return $this->_results[$var];
    }
    else{
      return null;
    }
  }


public static function create($_results,$query){
    return new Leads($id,$lead_name,$lead_phone,$product_id);
    $query="INSERT INTO crm_leads(lead_name,lead_phone,product_id)VALUES($POST[lead_name],$POST[lead_phone],$POST[product_name])";
}
public static function select($_results,$query){
  return new Leads($id,$lead_name,$lead_phone,$product_id);
  $query="SELECT * FROM crm_leads";
}
$ublic static function delete($_results,$query,$conds){
  return new Leads($id,$lead_name,$lead_phone,$product_id);
  $query="DELETE FROM crm_leads WHERE $id=1";
}      
public static function update($_results,$query){
return new Leads($id,$lead_name,$lead_phone,$product_id);
  $query="UPDATE($id,$lead_name,$lead_phone,$product_id)".$crm_leads".VALUES("Jones","567-8910",3) WHERE $id=2";
 }

  $_results= BusinessLogicLayer::create('data', array (
  1 => 'id',
  2 => 'lead_name',
  3 => 'lead_phone',
  4 => 'product_id'
));

print_r($_results->getallLeads()); 
}
?>



  