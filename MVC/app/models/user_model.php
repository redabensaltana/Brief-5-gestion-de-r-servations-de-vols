<?php

    require_once '../app/core/Connection.php';
    
    class user_model extends Connection{
    
        public function getflights(){
            $result = $this->connection()->query("SELECT * FROM flight;");
            return $result;
        }

        public function addbooking(){
            
        }
        
    }