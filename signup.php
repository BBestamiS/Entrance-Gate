    <link rel="stylesheet" href="styles/login-register/desktop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/login-register/laptop.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/login-register/tablet.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="styles/login-register/mobile.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <section class="main">
    <?php
                if(isset($_GET['page']) && $_GET['page'] == 'register'){
                    if(isset($_GET['section'])){
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3'){
                            if ($_GET['section'] == '1'){
                                echo '
                                <section class="form-section">
                            ';
                            }else{
                                echo '
                                <section class="form-section-disable">
                            ';
                            }
                        }else{
                            echo '
                            <section class="form-section">
                            ';
                        }
                    }else{
                        echo '
                        <section class="form-section">
                        ';
                    }
                   
                } else{
                    echo '
                    <section class="form-section">
                    ';
                }
                ?>
        
            <form class="form" action="#" method="post">
                <section class="back-animate">
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'register'){
                    if(isset($_GET['section'])){
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3'){
                            if ($_GET['section'] == '1'){
                                echo'
                                <a class="back-animate-a" href="signup.php">
                                <div class="dot-black">
                                   <div class="dot-white"></div>
                                   <div class="dot-stroke"></div>
                                </div>
                                <p class="dot-text">Giriş Yap</p>
                                ';
                            }else{
                                echo'
                                <a class="back-animate-a" href="signup.php">
                                <div class="dot-black">
                                   <div class="dot-white"></div>
                                   <div class="dot-stroke"></div>
                                </div>
                                <p class="dot-text">Giriş Yap</p>
                                ';
                            }
                        }else{
                            echo '
                        <a class="back-animate-a" href="?page=register&section=1">
                        <div class="dot-black">
                            <div class="dot-white"></div>
                            <div class="dot-stroke"></div>
                        </div>
                        <p class="dot-text">Kayıt Gönder</p>
                        ';
                        }
                    }else{
                        echo '
                        <a class="back-animate-a" href="?page=register&section=1">
                        <div class="dot-black">
                            <div class="dot-white"></div>
                            <div class="dot-stroke"></div>
                        </div>
                        <p class="dot-text">Kayıt Gönder</p>
                        ';
                    }
                   
                } else{
                    echo '
                    <a class="back-animate-a" href="?page=register&section=1">
                    <div class="dot-black">
                        <div class="dot-white"></div>
                        <div class="dot-stroke"></div>
                    </div>
                    <p class="dot-text">Kayıt Gönder</p>
                    ';
                }
                ?>
                    </a>
                </section>
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'register'){
                    if(isset($_GET['section'])){
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3'){
                            if ($_GET['section'] == '1'){
                                echo'
                        <input class="input-left" type="text" name="name" placeholder="İsim">
                        <input class="input-right" type="text" name="surname" placeholder="Soyisim">
                        <input class="input-left" type="text" name="email" placeholder="ePosta">
                        <input class="input-right" type="password" name="password" placeholder="Parola">
                        
                        <div class="plate-div">
                        <p class="plate-text">Araç Plakası</p>
                        <div class="plate-info-div">
                        <input class="input-left-plete" type="text" name="plateleft" placeholder="00" maxlength="2">
                        <input class="input-center-plete" type="text" name="platecenter" placeholder="XXX" maxlength="3">
                        <input class="input-right-plete" type="text" name="plateright" placeholder="000" maxlength="4">
                        </div>
                    </div>
                    <button class="submit-button" type="submit" name="submit">İlerle</button>
                        ';
                            }else{
                                echo '
                               
                            ';
                            }
                        }else{
                            echo'
                    <div class="login-input-div">
                        <input class="input-left" type="text" name="email" placeholder="ePosta">
                        <input class="input-right" type="password" name="password" placeholder="Parola">
                    </div>
                    <button class="submit-button" type="submit" name="submit">Giriş</button>
                    ';
                        }
                    }else{
                        echo'
                        <div class="login-input-div">
                            <input class="input-left" type="text" name="email" placeholder="ePosta">
                            <input class="input-right" type="password" name="password" placeholder="Parola">
                        </div>
                        <button class="submit-button" type="submit" name="submit">Giriş</button>
                        ';
                    }
                   
                } else{
                    echo'
                    <div class="login-input-div">
                        <input class="input-left" type="text" name="email" placeholder="ePosta">
                        <input class="input-right" type="password" name="password" placeholder="Parola">
                    </div>
                    <button class="submit-button" type="submit" name="submit">Giriş</button>
                    ';
                }
                ?>
            </form>
        </section>
        <section class="bg">
            <div class="bg1">
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'register'){
                    if(isset($_GET['section'])){
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3'){
                            if ($_GET['section'] == '1'){
                                echo '
                                <div class="color3"></div>
                                <div class="color4"></div>
                            ';
                            }else{
                                echo '
                                <div class="color5"></div>
                                <div class="color6"></div>
                            ';
                            }
                        }else{
                            echo '
                                <div class="color1"></div>
                                <div class="color2"></div>
                            ';
                        }
                    }else{
                        echo '
                            <div class="color1"></div>
                            <div class="color2"></div>
                        ';
                    }
                   
                } else{
                    echo '
                        <div class="color1"></div>
                        <div class="color2"></div>
                    ';
                }
                ?>
                
            </div>
        </section>