<?php
require_once 'includes/db_function.php';
?>
<link rel="stylesheet" href="styles/staff/desktop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/staff/laptop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/staff/tablet.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/staff/mobile.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
 </head>
<body>
    <section class="main">
    <a href="includes/logout.inc.php" class="exit-button"></a>
    <article class="selection-user-article">
                            <div class="selection-user-bg">
                                <div class="user-bg">
                                    <div class="form-div">
                                    <form class="form" action="./includes/entry.inc.php" method="post">
                                        <div class="plate-div">
                                        <?php
                                        session_start();
                                            $staff = getStaff($_SESSION['id']);
                                            $explodePlate = explode(" ", $staff->plate);
                                            $plateLeft = $explodePlate[0];
                                            $plateCenter = $explodePlate[1];
                                            $plateRight = $explodePlate[2];
                                            ?>
                                            <p class="staff-security-text">Onay Durumu</p>
                                            
                                            <?php
                                            if($staff->confirmation == 1){?>
                                            <p class="staff-security-p">Onaylandı</p>
                                            
                                            <?php
                                            }
                                            elseif ($staff->confirmation == 0) {?>
                                            <p class="staff-security-p1">Onaylama Sürecinde</p>
                                            
                                                <?php
                                            }else {?>
                                            <p class="staff-security-p2">Onaylanmadı</p>
                                           
                                                <?php
                                            }
                                        ?>
                                        <p class="plate-text">Araç Plakası</p>
                                       
                                        <div class="plate-info-div">
                                            <input class="input-left-plete" type="text" name="plateleft" value="<?php echo $plateLeft ?>" maxlength="2">
                                            <input class="input-center-plete" type="text" name="platecenter" value="<?php echo $plateCenter ?>" maxlength="3">
                                            <input class="input-right-plete" type="text" name="plateright" value="<?php echo $plateRight ?>" maxlength="4">
                                        </div>
                                    </div>
                                    <input type="hidden" name="possition" value="update">
                                        <button class="gate-button" type="submit" name="submit">Aracı Güncelle</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </article>
   
    <?php
        include_once 'transactions/selection.php';
        include_once 'bg-animation/on.php';
    ?>