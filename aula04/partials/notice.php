<?php


session_start();
if(isset($_SESSION['errors'])) {
     echo '<div class="alert alert-danger">';
     echo '<ul>';  
     foreach($_SESSION['errors'] as $error) {
     echo "<li>$error</li>";
     }
     echo '</ul>';
     echo '</div>';
                
     unset($_SESSION['errors']);     
}

if(isset($_SESSION['success'])) {
     echo '<div class="alert alert-success">';
     echo  $_SESSION['success'];
     echo '</div>';
                
     unset($_SESSION['success']);     
}
