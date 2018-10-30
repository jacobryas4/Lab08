<?php


class Logout extends View{
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Logout</div>
        
        <div class="middle-row">
            <p>You have been successfully logged out.</p>
        </div>
        <?php
        //diplay footer
        parent::footer();
    }
}