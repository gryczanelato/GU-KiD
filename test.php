<?php
if (isset($_POST['submit-btn-log'])) {
    session_start();
    var_dump($_POST);
    
    echo"you're logged in";
}
?>