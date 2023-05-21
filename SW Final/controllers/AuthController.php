<?php
require_once('../../Models/webuser.php');
require_once('../../controllers/DBController.php');
class AutherController
{
    protected $db;

    public function login(webuser $admin1)
    {
       $ziko1=$admin1->user;
       $ziko2=$admin1->password;
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from webuser where user='$ziko1' and password ='$ziko2'";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    
                    session_start();
                    $_SESSION["errMsg"]="you have enrered wrong password or username";
                    
                    return false;
                }
                else
                {
                    session_start();
                    $_SESSION["webuserUser"]=$result[0]["user"];
                    $_SESSION["webuserpass"]=$result[0]["password"];
                    $_SESSION["webuserrole"]=$result[0]["role"];
                   
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }

   

    

}

?>