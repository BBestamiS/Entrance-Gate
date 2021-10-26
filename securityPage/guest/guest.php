<a href="main.php" class="back-button"></a>
                    <article class="selection-user-article">
                            <div class="selection-user-bg">
                                <div class="user-bg">
                                    <div class="form-div">
                                    <form class="form" action="./includes/entry.inc.php" method="post">
                                        <input class="gate-input" type="text" name="name" placeholder="Adı">
                                        <input class="gate-input" type="text" name="surname" placeholder="Soyadı">
                                        <div class="plate-div">
                                        <p class="plate-text">Araç Plakası</p>
                                        <div class="plate-info-div">
                                            <input class="input-left-plete" type="text" name="plateleft" placeholder="00" maxlength="2">
                                            <input class="input-center-plete" type="text" name="platecenter" placeholder="XXX" maxlength="3">
                                            <input class="input-right-plete" type="text" name="plateright" placeholder="000" maxlength="4">
                                        </div>
                                    </div>
                                    <input type="hidden" name="possition" value="guest">
                                        <button class="gate-button" type="submit" name="submit">Giriş Yaptı</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </article>