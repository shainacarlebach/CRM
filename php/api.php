<?php

require_once'connection.php';
require_once'leads.php';
require_once'prospects.php';
require_once'products.php';
require_once'professions.php';

$func=$_POST['func'];

switch ($func){
    case 'allLeads':
    $l=Leads::getAllLeads();
    return $l;
    break;
    case 'id':
    $id=($_POST['id']);
    echo leads::checkId($id);
    break;
    case 'update':
    $id=($_POST['id']);
    $name=($_POST['lead_name']);
    $phone=($_POST['lead_phone']);
    $product_id=($_POST['product_id']);
    echo leads::UpdateLead($id, $name, $phone,$product_id);
    break; 
    default:
    return 'invalid request'; 
}
?>