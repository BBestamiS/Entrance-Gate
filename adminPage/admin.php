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
               if($_GET['selection'] == "user" || $_GET['selection'] == "gate" || $_GET['selection'] == "security" || $_GET['selection'] == "entry"){
                if($_GET['selection'] == "user"){?>
                <a href="main.php" class="back-button"></a>
                <?php
                    include_once 'transactions/user.php';
                    include_once 'bg-animation/off.php';
                } elseif ($_GET['selection'] == "gate") {?>
                    <a href="main.php" class="back-button"></a>
                    <?php
                    
                    if(isset($_GET['section'])){
                        if($_GET['section'] == "addgate"){?>
                            <a href="main.php?selection=gate" class="back-button"></a>
                            <?php
                            include_once 'gate/addgate.php';
                            }else{
                                include_once 'gate/gate.php';
                            }
                    }else{
                        include_once 'gate/gate.php';
                    }
                    include_once 'bg-animation/off.php';
                } elseif ($_GET['selection'] == "security") {?>
                    <a href="main.php?id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    include_once 'security/addsecurity.php';
                    include_once 'bg-animation/addsecurity.php';
                } elseif ($_GET['selection'] == "entry") {?>
                   <a href="main.php?id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    include_once 'bg-animation/addsecurity.php';
                }
               }
               else{?>
                <a href="includes/logout.inc.php" class="exit-button"></a>
                <?php
               
                include_once 'transactions/selection.php';
                include_once 'bg-animation/on.php';
            }
               
        }elseif (isset($_GET['id'])) {
            if(getGateConfirmation($_GET['id'])){?>
                <a href="main.php?selection=gate" class="back-button"></a>
                <?php
                include_once 'gate/selection.php';
                include_once 'bg-animation/addsecurity.php';
            }else{?>
                <a href="includes/logout.inc.php" class="exit-button"></a>
                <?php
                include_once 'transactions/selection.php';
                include_once 'bg-animation/on.php';
            }
        }
           
           else{?>
            <a href="includes/logout.inc.php" class="exit-button"></a>
            <?php
                include_once 'transactions/selection.php';
                include_once 'bg-animation/on.php';
           }
           ?>