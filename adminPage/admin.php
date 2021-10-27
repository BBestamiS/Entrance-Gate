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
               if($_GET['selection'] == "user" || $_GET['selection'] == "gate" || $_GET['selection'] == "security" || $_GET['selection'] == "entry" || $_GET['selection'] == "getall" || $_GET['selection'] == "addsecurity" || $_GET['selection'] == "showsecuritys"){
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
                } elseif ($_GET['selection'] == "addsecurity") {?>
                    <a href="main.php?selection=security&id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    include_once 'security/addsecurity.php';
                    include_once 'bg-animation/addsecurity.php';
                }elseif ($_GET['selection'] == "showsecuritys") {?>
                    <a href="main.php?selection=security&id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    include_once 'security/showsecuritys.php';
                    include_once 'bg-animation/addsecurity.php';
                }  
                elseif ($_GET['selection'] == "security") {?>
                    <a href="main.php?id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    include_once 'security/security.php';
                    include_once 'bg-animation/addsecurity.php';
                }  
                elseif ($_GET['selection'] == "entry") {
                    if(isset($_GET['guestid']) || isset($_GET['staffid'])){?>
                    <a href="main.php?selection=entry&id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    }else {?>
                   <a href="main.php?id=<?php echo $_GET['id'] ?>" class="back-button"></a>
                    <?php
                    }
                    include_once 'gate/gateinfo.php';
                    include_once 'bg-animation/addsecurity.php';
                }elseif ($_GET['selection'] == "getall") {
                    if(isset($_GET['guestid']) || isset($_GET['staffid'])){?>
                    <a href="main.php?selection=getall" class="back-button"></a>
                    <?php
                    }else {?>
                   <a href="main.php?selection=gate" class="back-button"></a>
                    <?php
                    }
                    ?>
                    <?php
                    include_once 'gate/getall.php';
                    include_once 'bg-animation/off.php';
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
        }elseif (isset($_GET['deleteid'])) {
            if(getGateConfirmation($_GET['deleteid'])){
                deleteGate($_GET['deleteid']);
            }else{?>
                <a href="includes/logout.inc.php" class="exit-button"></a>
                <?php
                include_once 'transactions/selection.php';
                include_once 'bg-animation/on.php';
            }
        }
        elseif (isset($_GET['deletesecurityid'])) {
            if(getSecurityConfirmation($_GET['deletesecurityid'])){
                deleteSecurity($_GET['deletesecurityid'],$_GET['gateid'] );
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