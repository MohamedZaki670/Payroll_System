<?php
require_once('../../Models/location.php');
require_once('../../controllers/DBController.php');
class locationcontroller
{
    protected $db;

    
    public function getdata($id)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select * from location where id=$id ";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
}
?>