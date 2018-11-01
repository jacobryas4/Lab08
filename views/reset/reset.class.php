<?php
/*
* Author: Adam Patrick
* Date: 10/29/18
* Name: reset.class.php
* Description: Creates a form that allows the user to change their password
*/
class Reset extends View {
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Reset Password</div>
        <?php
        //checks to see if the user is logged in by looking for a cookie with a username
        if(isset($_COOKIE[$cookie_name])){
            ?>
        
            <div class="middle-row">
                <p>Please enter a new password. Username is not changeable.</p>
                <!--creates the password reset form and posts the data to the model-->
                <form action="index.php?action=do_reset" method="post">
                    <!--Autofills the username from the cookie into the username field and makes it read only-->
                    <input type="text" name="username" value="<?php $_COOKIE[$cookie_name] ?>" readonly><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="submit" placeholder="Reset Password">
                </form>    
            </div>
        
            <?php
        //if the user is not logged in display a failure message
        } else {
            ?>
        
            <div class="middle-row">
                <p>You are not currently logged in, you need to be logged in to reset your password.</p>
            </div>
            
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
                <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
            </div>
        
            <?php
            //display footer
            parent::footer();
        }
    }
}
