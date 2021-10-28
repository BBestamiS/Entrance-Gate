                    <a href="main.php?selection=staff" class="back-button"></a>
                    <article class="selection-user-article">
                            <div class="selection-user-bg">
                                <div class="user-bg">
                                    <div class="form-div">
                                        <?php
                                         $staff = getStaff($_GET['id']);
                                        if($staff->confirmation == 1){?>

                        <form class="form" action="./includes/entry.inc.php" method="post">
                                        <div class="staff-security-info">
                                            <p class="staff-security-p">Adı: <?php echo $staff->name ?></p>
                                            <p class="staff-security-p">Soyadı: <?php echo $staff->surname ?></p>
                                            <p class="staff-security-p">Plakası: <?php echo $staff->plate ?></p>
                                        </div>
                                        <input type="hidden" name="possition" value="staff">
                                        <input type="hidden" name="section" value="2">
                                        <input type="hidden" name="staffId" value="<?php echo $staff->id ?>">
                                        <button class="gate-button" type="submit" name="submit">Personeli Onayla</button>
                                    </form>
                                        <?php
                                        }elseif($staff->confirmation == 0) {?>
                                            <div class="staff-security-info">
                                            <p class="staff-security-p1">Adı: <?php echo $staff->name ?></p>
                                            <p class="staff-security-p1">Soyadı: <?php echo $staff->surname ?></p>
                                            <p class="staff-security-p1">Plakası: <?php echo $staff->plate ?></p>
                                            <p class="staff-security-p1">Onaylama Sürecinde</p>
                                            </div>
                                        <?php
                                        }elseif($staff->confirmation == -1) {?>
                                            <div class="staff-security-info">
                                            <p class="staff-security-p2">Adı: <?php echo $staff->name ?></p>
                                            <p class="staff-security-p2">Soyadı: <?php echo $staff->surname ?></p>
                                            <p class="staff-security-p2">Plakası: <?php echo $staff->plate ?></p>
                                            <p class="staff-security-p2">Onaylanmadı!</p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    
                                    </div>
                                </div>
                            </div>
                        </article>