<?php

class VerifyUser extends View {
    public function display($message){
        //display header
        parent::header();
        ?>
        <div class="top-row">Login</div>
        
        <div class="middle-row">
            <!--*************How do you know when to display different messages?**********************-->   
        </div>
        
        <div class="bottom-row"></div>
        <?php
        //display footer
        parent::footer();
    }
}
