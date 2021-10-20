<?php
require_once 'includes/db_function.php';
?>
<link rel="stylesheet" href="styles/security/desktop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/security/laptop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/security/tablet.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/security/mobile.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
 </head>
<body>
    <section class="main">
    
    <?php
    if(isset($_GET['selection'])){
        if($_GET['selection'] == "staff" || $_GET['selection'] == "guest"){
            if($_GET['selection'] == "staff"){?>
     <a href="main.php" class="back-button"></a>
                    <article class="selection-user-article">
                            <div class="selection-user-bg">
                                <div class="user-bg">
                                    <div class="form-div">
                                    <form class="form" action="./includes/entry.inc.php" method="post">
                                        <input class="gate-input" type="text" name="staffId" placeholder="Personel Id'si">
                                        <button class="gate-button" type="submit" name="submit">Giriş Yaptı</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </article>

            <?php
            }
            ?>

        <?php
        include_once 'bg-animation/off.php';
        } else{

        }
    } else{?>
    <a href="includes/logout.inc.php" class="exit-button"></a>
    <?php
        include_once 'transactions/selection.php';
        include_once 'bg-animation/on.php';
    }
    
    ?>