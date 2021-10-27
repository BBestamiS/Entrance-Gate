<?php
$vehicleInfo = getVehiclesInfo();
?>
<article class="selection-user-article">
                        <div class="selection-user-bg">
                            <div class="user-bg">
                                <div class="gate-div">
                                    <div class="total-vehicles-bg">
                                        <div class="date-div">
                                        <p class="total-vehicles-date">Tarih: <?php echo date("d-m-Y"); ?></p>
                                        </div>
                                        <a href="main.php?selection=getall" class="total-vehicles-div">
                                            <p class="total-vehicles-p">Bugün <?php echo $vehicleInfo[0] ?> Araç giriş yaptı</p>
                                            <p class="total-vehicles-p">Bugün <?php echo $vehicleInfo[2] ?> Araç çıkış yaptı</p>
                                            <p class="total-vehicles-p">Toplam <?php echo $vehicleInfo[3] ?> araç kurum içerisinde</p>
</a>
                                    </div>
                                <?php
                                foreach(getGates() as $item){
                                    $gateInfo = getGateInfo($item['id']);
                                    ?>
                                <div class="show-gate">
                                    <div class="show-gate-div">
                                        <a href="?id=<?php echo $item['id'] ?>" class="show-gate-bg">
                                        <div class="gate-name-div">
                                            <p class="gate-name"><?php echo $item['gate_name'] ?> Kapısı</p>
                                        </div>
                                        <div class="gate-name-div">
                                            <p class="today-entry">Giriş <?php echo $gateInfo[0] ?></p>
                                            <p class="today-entry">Çıkış <?php echo $gateInfo[1] ?></p>
                                        </div>
                                       </a>
                                       <div class="delete-gate-div">
                                           <a href="?deleteid=<?php echo $item['id'] ?>" class="delete-gate"></a>
                                       </div>

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