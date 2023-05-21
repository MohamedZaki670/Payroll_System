<?php
require_once('../../controllers/DBController.php');
class photocontroller
{
    protected $db;

    
    public function getphoto($id)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select * from photo where empid=$id ";
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