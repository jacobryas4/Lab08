<?php
/*
* Author: Adam Patrick
* Date: 10/29/18
* Name: reset_confirm.class.php
* Description: displays messages based on whether the password reset attempt was succesful or not
*/
class ResetConfirm extends View {
    public function display($message){
        //display header
        parent::header();
        ?>
        <div class="top-row">Reset Password</div>
        <?php
        //if password reset was successful display success message and respective links
        if($message == true){
            ?>
            <div class="middle-row">
                <p>You have successfully reset your password.</p>
            </div>
            <div class="bottom-row">
                <span style="float: left">Want to log out?<a href="index.php?action=logout">Logout</a></span>
                <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
            </div>
            <?php
        //if password reset failed display fail message and respective links
        } else {
            ?>
            <div class="middle-row">
                <p>Your last attempt to reset your password failed. Please try again.</p>
            </div>
            <div class="bottom-row">
                <span style="float: left">Want to log out?<a href="index.php?action=logout">Logout</a></span>
            </div>            
            <?php
        }
        //display footer
        parent::footer();
    }
}