<?php
include_once 'header.php';
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_possition'] == 0){?>
    
    <p>merhaba person</p>
<?php
}else{
    header('location: ./index.php');
}
include_once 'footer.php'; 
?>