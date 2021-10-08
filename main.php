<?php
include_once 'header.php';
session_start();
if(isset($_SESSION['personid'])){?>



    <link rel="stylesheet" href="styles/login-register/desktop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/login-register/laptop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/login-register/tablet.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/login-register/mobile.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>
    <body>
        <section class="main">
        <a href="includes/logout.inc.php">çıkış yap</a>



<?php 
}else{
    header('location: ./index.php');
}
include_once 'footer.php'; 
?>