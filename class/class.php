<?php

session_start();

class user {

    public $host="localhost"; 
    public $username="root"; 
    public $password=""; 
    public $dbname="regandlog"; 
    public $run;




    public function __construct() {
       $this->run =  new mysqli($this->host,$this->username,$this->password,$this->dbname);
         if(mysqli_connect_error()){
             echo "database connection failed";
             exit;
         }
    }
    public function insert($data){
         $name = $this->run->query($data); 
         if ($name){
             return true;
         }
         else
             { 
             return false ;
             
             }
}
public  function login($data)
        {
    
        $log = $this->run->query($data); 
         if ($log->num_rows > 0){
             
             //print($log->num_rows); //match  return  1
             return true;
         }
         else
             { 
             //print($log->num_rows); //match return 0
            return false ;
             
             }
        }
 public function profile($profile)
 {
     $ft = $this->run->query($profile);//mysql _fetch_array
     $value=$ft->fetch_object();
     
     //print_r($value);
     
      $this->val[]=$value;
     
      return $this->val;
 }
 
 
 public function logout()
 {
      unset($_SESSION['email']);
     
      header("location:index.php"); 
 }

 
public function url($url){
        header("location:".$url);
}

}

$obj = new user(); 
?>