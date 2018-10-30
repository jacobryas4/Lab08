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
        
    }
}
