<?php
require_once('../../controllers/DBController.php');
class salarycontroller
{
    protected $db;

    
    public function getsalary($id)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select * from employee where empid=$id ";
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