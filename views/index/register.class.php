<?php
/*
* Author: Adam Patrick
* Date: 10/29/18
* Name: register.class.php
* Description: Displays success of fail messages for account creation
*/
class Register extends View{
    public function display($message){
        //display header
        parent::header();
        ?>
        <div class="top-row">Create an account</div>
        <?php
        //display success message and corresponding links if account creation succeeds
        if($message == true){
            ?>
            <div class="middle-row">
                <p>Your account has been successfully created.</p>
            </div>
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            </div>
            <?php
        //display fail message and corresponding links if account creation fails   
        } else {
            ?>
            <div class="middle-row">
                <p>Your last attempt for creating an account failed. Please try again.</p>
            </div>
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            </div>            
            <?php
        }
        //display footer
        parent::footer();
    }
}
