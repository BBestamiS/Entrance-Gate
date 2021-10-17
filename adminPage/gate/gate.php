<article class="selection-user-article">
                        <div class="selection-user-bg">
                            <div class="user-bg">
                                <div class="gate-div">
                                <?php
                                foreach(getGate() as $item){?>
                                <div class="show-gate">
                                    <div class="show-gate-div">
                                        <a href="#" class="show-gate-bg">
                                        <div class="gate-name-div">
                                            <p class="gate-name"><?php echo $item['gate_name'] ?> Kapısı</p>
                                        </div>
                                        <div class="gate-name-div">
                                            <p class="today-entry">Giriş <?php echo "300" ?></p>
                                            <p class="today-entry">Çıkış <?php echo "250" ?></p>
                                            <p class="today-entry">İçeride <?php echo "50" ?></p>
                                        </div>
                                       </a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <div class="add-gate-symbol">
                                    <section class="add-gate-section">
                                        <a class="add-gate" href="?selection=gate&section=addgate"></a>
                                        <p class="add-gate-text">Kapı Ekle</p>
                                    </section>
                                </div>
                            
                                </div>
                            </div>
                        </div>
                    </article>