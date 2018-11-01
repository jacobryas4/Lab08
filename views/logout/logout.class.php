<?php
/*
* Author: Adam Patrick
* Date: 10/29/18
* Name: logout.class.php
* Description: Display the message for a successful logout
*/

class Logout extends View{
    public function display(){
        //display header
        parent::header();
        ?>
        <!--Display the logout message-->
        <div class="top-row">Logout</div>
        
        <div class="middle-row">
            <p>You have been successfully logged out.</p>
        </div>
        <!--display the links-->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
        </div>
        <?php
        //diplay footer
        parent::footer();
    }
}