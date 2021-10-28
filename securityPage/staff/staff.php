                    <a href="main.php" class="back-button"></a>
                    <article class="selection-user-article">
                            <div class="selection-user-bg">
                                <div class="user-bg">
                                    <div class="form-div">
                                    <form class="form" action="./includes/entry.inc.php" method="post">
                                        <input class="gate-input" type="text" name="staffId" placeholder="Personel Id'si">
                                        <input type="hidden" name="possition" value="staff">
                                        <input type="hidden" name="section" value="1">
                                        <button class="gate-button" type="submit" name="submit">Giriş Yaptı</button>
                                        <?php
                                    if(isset($_GET['error'])){
                                        if($_GET['error'] == "success"){?>
                                            <p class="entry-success">Giriş Başarılı</p>
                                        <?php   
                                            
                                        }elseif ($_GET['error'] == "emptyId") {?>
                                            <p class="entry-error">Id Giriniz</p>
                                            <?php
                                        }
                                        elseif ($_GET['error'] == "notFoundId") {?>
                                            <p class="entry-error">Personel bulunamadı</p>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </article>