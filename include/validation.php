<?php

    class validate{
        public function checkForEmpty($data, $fields) { // check for empty fields
            $message = null;
            
            foreach ($fields as $value) { 
                if (empty($data[$value])) { 
                    $message .= "<p>Sorry, but the $value field cannot be left empty.</p>";
                }
            }
            return $message;
        }
    
        public function checkForValidEmail($email){ // check for a valid email
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;
        }

        public function checkPassword($password) { // check for a valid password
            $message = null;
        
            if (strlen($password) < 5) { // if the password is less than 5 characters long
                $message .= "<p>Sorry, but your password must be at least 5 characters long.</p>";
            }
            if (!preg_match('/[A-Z]/', $password)) { //if the password doesnt have a uppercase letter
                $message .= "<p>Sorry, but your password must contain at least one uppercase letter.</p>";
            }
            if (!preg_match('/[0-9]/', $password)) { //if the password doesnt have a number
                $message .= "<p>Sorry, but your password must contain at least one number.</p>";
            }  
            if (is_null($message)) {
                return true; 
            }
        
            return $message; 
        }

        public function checkUsername($username) { // check for a valid username
            if (strlen($username) > 3) { //if the username length is bigger than 3 characters, then its valid
                return true;
            }
            return "<p>Sorry, but the username must be at least 3 characters long.</p>";
        }

}
    



?>