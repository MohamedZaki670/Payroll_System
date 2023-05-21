<?php
require_once('../../Models/employee.php');
require_once('../../controllers/DBController.php');
class employeecontroller
{
    protected $db;

    
    public function getdata()
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select * from employee";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
    
    
    
    
    public function addemp(employee $employee)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="insert into employee values('$employee->empname',$employee->empid,$employee->emppassword,$employee->salary)";
             return $this->db->insert($query);
            
                
            
        }
        else
        {
           
            return false;
        }
    }  
    public function deleteemp( $empid)
    {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="delete from employee where empid = $empid";
            return $this->db->delete($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
    }
    
}
      
?>