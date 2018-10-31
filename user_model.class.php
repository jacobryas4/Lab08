<?php

/**
 * Description of user_model
 *
 * @author jacobbryant
 */
class UserModel {
    
    // attributes
    private $db; // database object
    private $dbConnect; // database connect object
    
    // constructor
    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnect = $this->db->getConnection();
    }
    
    // public methods 
    public function add_user() {
        
        // get form field values 
        $username    = $_POST["username"];
        $password    = $_POST["password"];
        $email       = $_POST["email"];
        $firstName   = $_POST["firstname"];
        $lastName    = password_hash($_POST["lastname"], PASSWORD_DEFAULT);
        
        // build SQL statement
        // might have to add '' around variables
        $sql = "INSERT INTO users (username, password, email, firstname, lastname) VALUES (" . $username . 
                "," . $password . "," . $email . "," . $firstName . "," . $lastName . ")"; 
        
        // insert into table and return true/false depending on success
        if ($this->dbConnect->query($sql) === true) {
            return true;
        } else {
            return false;
        }
        
    }
    
    public function verify_user() {
        
        // retrieve values from form
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // build SQL statement
        // START HERE
        $sql = "SELECT * WHERE (username = '" . $username . "') AND ( password = '" . $password;
        
    }
    
    public function logout() {
        
    }
    
    public function reset_password() {
        
    }
}
