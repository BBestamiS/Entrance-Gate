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
        if($_GET['selection'] == "staff" || $_GET['selection'] == "guest" || $_GET['selection'] == "exit"){
            if($_GET['selection'] == "staff"){
                if(isset($_GET['id'])){
                    if(getStaffConfirmation($_GET['id'])){
                        include_once 'staff/staffConfirm.php';
                    }else{
                        include_once 'staff/staff.php';
                    }
                }else{
                    include_once 'staff/staff.php';
                }
            } elseif ($_GET['selection'] == "guest") {
              include_once 'guest/guest.php';
            } elseif ($_GET['selection'] == "exit") {?>
                  <a href="main.php" class="back-button"></a>
                    <article class="selection-user-article">
                            <div class="selection-user-bg">
                                <div class="user-bg">
                                    <div class="form-div">
                                    <form class="form" action="./includes/entry.inc.php" method="post">
                                        <div class="plate-div">
                                        <p class="plate-text">Araç Plakası</p>
                                        <div class="plate-info-div">
                                            <input class="input-left-plete" type="text" name="plateleft" placeholder="00" maxlength="2">
                                            <input class="input-center-plete" type="text" name="platecenter" placeholder="XXX" maxlength="3">
                                            <input class="input-right-plete" type="text" name="plateright" placeholder="000" maxlength="4">
                                        </div>
                                    </div>
                                    <input type="hidden" name="possition" value="exit">
                                        <button class="gate-button" type="submit" name="submit">Çıkış Yaptı</button>
                                        <?php
                                    if(isset($_GET['error'])){
                                        if($_GET['error'] == "success"){?>
                                            <p class="entry-success">Çıkış Başarılı</p>
                                        <?php   
                                            
                                        }elseif ($_GET['error'] == "emptyInput") {?>
                                            <p class="entry-error">Tüm Alanları Doldurunuz</p>
                                            <?php
                                        }
                                        elseif ($_GET['error'] == "invalidPlate") {?>
                                            <p class="entry-error">Geçersiz Plaka</p>
                                            <?php
                                        }
                                    }
                                    ?>
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