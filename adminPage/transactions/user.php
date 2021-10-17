<article class="selection-user-article">
                        <?php
                        $users = getWaitingUsers();
                            if(isset($_GET['status'])){
                                if($_GET['status'] == "accept"){
                                    updateConfirmation($_GET['id'],$_GET['status']);
                                }elseif ($_GET['status'] == "cancel") {
                                    updateConfirmation($_GET['id'],$_GET['status']);
                                }
                            }
                        ?>
                        <div class="selection-user-bg">
                        <div class="user-bg">
                            <p class="bg-header">Onay Bekleyen Kullanıcılar</p>
                            <div class="user-header-text">
                                <span class="user-header-span"></span>
                                <div class="user-section-info-div">
                                <p class="user-texts">İsmi</p>
                                <p class="user-texts">Soyismi</p>
                                <p class="user-texts-plate">Araç Plakası</p>
                                <p class="user-texts-desktop">Fakültesi</p>
                                <p class="user-texts-desktop">Bölümü</p>
                                <p class="user-texts">Pozisyonu</p>

                                </div>
                                
                                <span class="user-header-span"></span>
                            </div>
                            <?php
                                foreach($users as $item){?>
                                <div class="user-section-div">
                                <a href="?selection=user&status=accept&id=<?php echo $item['id'] ?>" class="user_accept"></a>
                                <div class="user-section-info-div">
                                <section class="user-sections">
                                    <p class="user-info-text"> 
                                        <?php echo $item['name']; ?>
                                    </p>
                                </section>
                                <section class="user-sections">
                                        <p class="user-info-text"> 
                                            <?php echo $item['surname']; ?>
                                        </p>
                                </section>
                                <section class="user-sections-plate">
                                    
                                        <p class="user-info-text"> 
                                            <?php echo $item['plate']; ?>
                                        </p>
                                </section>
                                <section class="user-sections-desktop">
                                        <p class="user-info-text"> 
                                            <?php echo getUserFaculty($item['faculty_id'])->name; ?>
                                        </p>
                                </section>
                                <section class="user-sections-desktop">
                                        <p class="user-info-text"> 
                                            <?php echo getUserDepartment($item['department_id'])->name; ?>
                                        </p>
                                </section>
                                <section class="user-sections">
                                        <p class="user-info-text"> 
                                            <?php echo getUserPossition($item['possition_id'])->name; ?>
                                        </p>
                                </section>
                                </div>
                                <a href="?selection=user&status=cancel&id=<?php echo $item['id'] ?>" class="user_cancel"></a>
                                
                                </div>
                                    <?php
                                }
                                ?>
                        </div>
                        </div>
                       
                    </article>