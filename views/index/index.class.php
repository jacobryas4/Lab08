<?php

/*
* Author: Adam Patrick
* Date: 10/29/18
* Name: index.class.php
* Description: Defines the index class, which contains the method for displaying the registration form
*/

class Index extends View{
    
    //create and display the registration form
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Create an account</div>

        <div class="middle-row">
            <!--post the data to the model-->
            <form action="index.php?action=register" method="post">
                <!--Get user registration data-->
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password, 5 characters minimum" minlength="5" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="text" name="first-name" placeholder="First Name" required><br>
                <input type="text" name="last-name" placeholder="Last Name" required><br>
                <input type="submit" name="submit" placeholder="Register"><br>
            </form>
        </div>
        <!--display links-->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
        </div>
            
        <?php
        
        //display footer
        parent::footer();
    }
}
