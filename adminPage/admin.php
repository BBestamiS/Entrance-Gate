<?php
require_once 'includes/db_function.php';
?>
<link rel="stylesheet" href="styles/admin/desktop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/admin/laptop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/admin/tablet.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/admin/mobile.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
 </head>
<body>
    <section class="main">
        <?php
           if(isset($_GET['selection'])){
               if($_GET['selection'] == "user" || $_GET['selection'] == "gate"){
                if($_GET['selection'] == "user"){
                    include_once 'transactions/user.php';
                    include_once 'bg-animation/off.php';
                } elseif ($_GET['selection'] == "gate") {
                    if(isset($_GET['section'])){
                        if($_GET['section'] == "addgate"){
                            include_once 'gate/addgate.php';
                            }else{
                                include_once 'gate/gate.php';
                            }
                    }else{
                        include_once 'gate/gate.php';
                    }
                    include_once 'bg-animation/off.php';
                }
               }
               else{
               
                include_once 'transactions/selection.php';
                include_once 'bg-animation/on.php';
            }
               
           }else{
               
                include_once 'transactions/selection.php';
                include_once 'bg-animation/on.php';
           }
           ?>