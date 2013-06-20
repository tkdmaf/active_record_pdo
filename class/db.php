<?php
class db{
   
    private $DB_Language = 'utf-8';
    private $db;
   
    function connect($DB_Host,$DB_User,$DB_Password,$DB_Name,$DB_Type = 'mysql'){
        #$DB_Host = 'localhost';
        #$DB_Tyep = 'mysql';
        #$DB_Name = 'doem';
        #$DB_User = 'root';
        #$DB_Password = '0000';
        #$DB_Language = 'utf-8'; 
        $dsn = "{$DB_Tyep}:host={$DB_Host};dbname={$DB_Name};charset={$this->DB_Language}";
        $this->db = new PDO($dsn, $DB_User, $DB_Password); 
        return $this;
    }
    
    function set_encode($encode){
       $this->DB_Language = $encode;
    }
    
    function get($table)  {  
        $result = $link->db->query("SELECT * FROM {$table}");        
        return $result;
    }
}
?>
