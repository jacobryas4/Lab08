<?php

/*
* Author: Adam Patrick
* Date: 10/29/18
* Name: index.class.php
* Description: Defines the index class, which contains the method for displaying the registration form
*/

class index {
    
    //create the registration form
    public function display(){
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>PeaPOD User Registration</title>
                <link href="www/css/styles.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
                <div id="middle-row">
                    <!--Get user registration data-->
                    <input type="text" id="username" placeholder="Username" required><br>
                    <input type="password" id="password" placeholder="Password, 5 characters minimum" minlength="5" required><br>
                    <input type="email" id="email" placeholder="Email" required><br>
                    <input type="text" id="first-name" placeholder="First Name" required><br>
                    <input type="text" id="last-name" placeholder="Last Name" required><br>
                    
                </div>
            </body>
        </html>
        <?php
    }
}
