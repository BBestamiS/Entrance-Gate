<article class="selection-user-article">
    <div class="selection-user-bg">
        <div class="user-bg">
                        <div class="entry-list-div">
                            <section class="security-info-section">
                                <h1 class="staff-info-h1">Atanmış Güvenlikler</h1>

                                    <div class="staff-info-list-div">
                                        <?php
                                        foreach(getSecuritys($_GET['id']) as $item){
                                            ?>
                                            <div  class="security-info-list-bg">
                                            <a href="?deletesecurityid=<?php echo $item['id'] ?>&gateid=<?php echo $_GET['id'] ?>" class="delete-security"></a>
                                            <div class="staff-name-surname-div">
                                                <div class="staff-name-div">
                                                    <p class="staff-name-p">Adı: <?php echo $item['name'] ?></p>
                                                    <p class="staff-name-p">Soyadı: <?php echo $item['surname'] ?></p>
                                                </div>
                                             </div>
                                            <div class="staff-info-plate">
                                                <p class="staff-info-p">e-Mail</p>
                                                <p class="staff-info-p"><?php echo $item['email'] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                               
                                </div>
                               
                            </section>
                        </div>
                  
        </div>
    </div>
</article>