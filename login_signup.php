    <?php
        require_once 'includes/db_function.php';
        session_start();
    ?>
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
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3' || $_GET['section'] == '4'){
                            if ($_GET['section'] == '1'){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate' || $_GET['error'] == 'emptyForm' || $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName'|| $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <section class="form-section-disable">
                                    ';
                                    } else{
                                        echo '
                                        <section class="form-section">
                                    ';
                                    }
                                }else{
                                    echo '
                                    <section class="form-section">
                                ';
                                }
                               
                            } elseif($_GET['section'] == '2' && isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['plate'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate' || $_GET['error'] == 'emptyForm' || $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName'|| $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                  <section class="form-section-disable">
                                ';
                                    } else{
                                        echo '
                                        <section class="form-section">
                                    ';
                                    }
                                }else{
                                    echo '
                                    <section class="form-section-disable">
                                ';
                                }
                                
                            }
                            elseif($_GET['section'] == '3' && isset($_SESSION['possition_id'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate' || $_GET['error'] == 'emptyForm' || $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName'|| $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                <section class="form-section-disable">
                                ';
                                    } else{
                                        echo '
                                        <section class="form-section">
                                    ';
                                    }
                                }else{
                                    echo'
                                <section class="form-section-disable">
                                ';
                                }
                               
                            }
                            elseif($_GET['section'] == '4' && isset($_SESSION['faculty_id'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate' || $_GET['error'] == 'emptyForm' || $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName'|| $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                <section class="form-section-disable">
                                ';
                                    } else{
                                        echo '
                                        <section class="form-section">
                                    ';
                                    }
                                }else{
                                    echo'
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
                    }else{
                        echo '
                        <section class="form-section">
                        ';
                    }
                   
                }
                else{
                    if(isset($_GET['error'])){
                        echo'
                         <section class="form-section-disable">
                        ';
                    }
                    else{
                        echo '
                        <section class="form-section">
                    ';
                    }
                } 

                if(isset($_GET['page']) && $_GET['page'] == 'register'){
                    if(isset($_GET['section'])){
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3' || $_GET['section'] == '4'){
                            if ($_GET['section'] == '1'){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                    <form class="form" action="includes/signup.inc.php" method="post">
                    ';
                } else{
                                        echo '
                            <form class="form" action="includes/login.inc.php" method="post">
                            ';
                        }
                     } else{
                                    echo '
                    <form class="form" action="includes/signup.inc.php" method="post">
                    ';
                }
            } elseif($_GET['section'] == '2' && isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['plate'])){
                if (isset($_GET['error'])) {
                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                        echo '
                        <form class="form" action="includes/signup.inc.php" method="post">
                        ';
} else{
                        echo '
            <form class="form" action="includes/login.inc.php" method="post">
            ';
        }
     } else{
        echo '
        <form class="form" action="includes/signup.inc.php" method="post">
        ';
}
                             
                            }
                            elseif ($_GET['section'] == '3' && isset($_SESSION['possition_id'])) {
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <form class="form" action="includes/signup.inc.php" method="post">
                                        ';
                } else{
                                        echo '
                            <form class="form" action="includes/login.inc.php" method="post">
                            ';
                        }
                     } else{
                        echo '
                    <form class="form" action="includes/signup.inc.php" method="post">
                    ';
                }
                               
                            }
                            elseif ($_GET['section'] == '4' && isset($_SESSION['faculty_id'])) {
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <form class="form" action="includes/signup.inc.php" method="post">
                                        ';
                } else{
                                        echo '
                            <form class="form" action="includes/login.inc.php" method="post">
                            ';
                        }
                     } else{
                        echo '
                        <form class="form" action="includes/signup.inc.php" method="post">
                        ';
                }
                               
                            }else{
                                echo '
                                <form class="form" action="includes/login.inc.php" method="post">
                               ';}
                        }else{
                            echo '
                            <form class="form" action="includes/login.inc.php" method="post">
                           ';}
                    }else{
                        echo '
                     <form class="form" action="includes/login.inc.php" method="post">
                    ';
                    }
                   
                } else{
                    echo '
                     <form class="form" action="includes/login.inc.php" method="post">
                    ';
                }
                ?>

                <section class="back-animate">
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'register'){
                    if(isset($_GET['section'])){
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3' || $_GET['section'] == '4'){
                            if ($_GET['section'] == '1'){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                        <a class="back-animate-a" href="login_signup.php">
                                        <div class="dot-black">
                                           <div class="dot-white"></div>
                                           <div class="dot-stroke"></div>
                                        </div>
                                        <p class="dot-text">Giriş Yap</p>
                                        ';
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
                                } else{
                                    echo'
                                    <a class="back-animate-a" href="login_signup.php">
                                    <div class="dot-black">
                                       <div class="dot-white"></div>
                                       <div class="dot-stroke"></div>
                                    </div>
                                    <p class="dot-text">Giriş Yap</p>
                                    ';

                                }
                            } elseif($_GET['section'] == '2' && isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['plate'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                        <a class="back-animate-a" href="login_signup.php">
                                        <div class="dot-black">
                                           <div class="dot-white"></div>
                                           <div class="dot-stroke"></div>
                                        </div>
                                        <p class="dot-text">Giriş Yap</p>
                                        ';
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
                                } else{
                                    echo'
                                    <a class="back-animate-a" href="login_signup.php">
                                    <div class="dot-black">
                                       <div class="dot-white"></div>
                                       <div class="dot-stroke"></div>
                                    </div>
                                    <p class="dot-text">Giriş Yap</p>
                                    ';
                                }
                                
                            }
                            elseif ($_GET['section'] == '3' && isset($_SESSION['possition_id'])) {
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                <a class="back-animate-a" href="login_signup.php">
                                <div class="dot-black">
                                   <div class="dot-white"></div>
                                   <div class="dot-stroke"></div>
                                </div>
                                <p class="dot-text">Giriş Yap</p>
                                ';
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
                                } else{
                                    echo'
                                <a class="back-animate-a" href="login_signup.php">
                                <div class="dot-black">
                                   <div class="dot-white"></div>
                                   <div class="dot-stroke"></div>
                                </div>
                                <p class="dot-text">Giriş Yap</p>
                                ';
                                }
                                
                                
                            }
                            elseif ($_GET['section'] == '4' && isset($_SESSION['faculty_id'])) {
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                        <a class="back-animate-a" href="login_signup.php">
                                        <div class="dot-black">
                                           <div class="dot-white"></div>
                                           <div class="dot-stroke"></div>
                                        </div>
                                        <p class="dot-text">Giriş Yap</p>
                                        ';
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
                                } else{
                                    echo'
                                    <a class="back-animate-a" href="login_signup.php">
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
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3' || $_GET['section'] == '4'){
                            if ($_GET['section'] == '1'){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo'
                                        <input type="hidden" name="section" value="1">
                                        <input class="input-left" type="text" name="name" placeholder="İsim">
                                        <input class="input-right" type="text" name="surname" placeholder="Soyisim">
                                        <input class="input-left" type="text" name="email" placeholder="ePosta">
                                        <input class="input-right" type="password" name="hashed_password" placeholder="Parola">
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
                                    } else{
                                        echo'
                                            <div class="login-input-div">
                                            <input class="input-left" type="text" name="email" placeholder="ePosta">
                                            <input class="input-right" type="password" name="password" placeholder="Parola">
                                            </div>
                                            <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                                        ';
                                    }
                                } else{
                                    echo'
                                    <input type="hidden" name="section" value="1">
                                    <input class="input-left" type="text" name="name" placeholder="İsim">
                                    <input class="input-right" type="text" name="surname" placeholder="Soyisim">
                                    <input class="input-left" type="text" name="email" placeholder="ePosta">
                                    <input class="input-right" type="password" name="hashed_password" placeholder="Parola">
                                    
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
                                }
                               
                            }elseif($_GET['section'] == '2' && isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['plate'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                <input type="hidden" name="section" value="2">
                                <input type="hidden" name="selection" value="';                       echo $_GET['selected'];
                                echo'">
                                <p class="form-info-text">Kurum içi pozisyonunuzu seçiniz</p>
                                <div class="form-select-menu">';
                                foreach(getPossitions() as $item){
                                    echo '<a href="?page=register&section=2&selected=';
                                   echo $item['id'];
                                    echo'" class="form-select-a">';
                                    if(isset($_GET['selected'])){
                                        if($_GET['selected'] == $item['id']){
                                            echo'
                                    <p class="select-menu-item-p" style="color: black">
                                    ';
                                        }else{
                                            echo'
                                            <p class="select-menu-item-p">
                                            ';
                                        }
                                    } else{
                                        echo'
                                        <p class="select-menu-item-p">
                                        ';
                                    }
                                    echo $item['name'];
                                    echo '</p>
                                    </a>';
                                }
                                echo '
                                </div>
                                <button class="submit-button" type="submit" name="submit">İlerle</button>
                                ';
                                    } else{
                                        echo'
                                            <div class="login-input-div">
                                            <input class="input-left" type="text" name="email" placeholder="ePosta">
                                            <input class="input-right" type="password" name="password" placeholder="Parola">
                                            </div>
                                            <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                                        ';
                                    }
                                } else{
                                    echo '
                                <input type="hidden" name="section" value="2">
                                <input type="hidden" name="selection" value="';                       echo $_GET['selected'];
                                echo'">
                                <p class="form-info-text">Kurum içi pozisyonunuzu seçiniz</p>
                                <div class="form-select-menu">';
                                foreach(getPossitions() as $item){
                                    echo '<a href="?page=register&section=2&selected=';
                                   echo $item['id'];
                                    echo'" class="form-select-a">';
                                    if(isset($_GET['selected'])){
                                        if($_GET['selected'] == $item['id']){
                                            echo'
                                    <p class="select-menu-item-p" style="color: black">
                                    ';
                                        }else{
                                            echo'
                                            <p class="select-menu-item-p">
                                            ';
                                        }
                                    } else{
                                        echo'
                                        <p class="select-menu-item-p">
                                        ';
                                    }
                                    echo $item['name'];
                                    echo '</p>
                                    </a>';
                                }
                                echo '
                                </div>
                                <button class="submit-button" type="submit" name="submit">İlerle</button>
                                ';
                                }
                                
                            }elseif($_GET['section'] == '3' && isset($_SESSION['possition_id'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <input type="hidden" name="section" value="3">
                                        <input type="hidden" name="selection" value="';                       echo $_GET['selected'];
                                        echo'">
                                        <p class="form-info-text">Bağlı olduğunuz fakülteyi seçiniz</p>
                                        <div class="form-select-menu">';
                                        foreach(getFacultys() as $item){
                                            echo '<a href="?page=register&section=3&selected=';
                                           echo $item['id'];
                                            echo'" class="form-select-a">';
                                            if(isset($_GET['selected'])){
                                                if($_GET['selected'] == $item['id']){
                                                    echo'
                                            <p class="select-menu-item-p" style="color: black">
                                            ';
                                                }else{
                                                    echo'
                                                    <p class="select-menu-item-p">
                                                    ';
                                                }
                                            } else{
                                                echo'
                                                <p class="select-menu-item-p">
                                                ';
                                            }
                                            echo $item['name'];
                                            echo '</p>
                                            </a>';
                                        }
                                        echo '
                                        </div>
                                        <button class="submit-button" type="submit" name="submit">İlerle</button>
                                        ';
                                    } else{
                                        echo'
                                            <div class="login-input-div">
                                            <input class="input-left" type="text" name="email" placeholder="ePosta">
                                            <input class="input-right" type="password" name="password" placeholder="Parola">
                                            </div>
                                            <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                                        ';
                                    }
                                } else{
                                    echo '
                                <input type="hidden" name="section" value="3">
                                <input type="hidden" name="selection" value="';                       echo $_GET['selected'];
                                echo'">
                                <p class="form-info-text">Bağlı olduğunuz fakülteyi seçiniz</p>
                                <div class="form-select-menu">';
                                foreach(getFacultys() as $item){
                                    echo '<a href="?page=register&section=3&selected=';
                                   echo $item['id'];
                                    echo'" class="form-select-a">';
                                    if(isset($_GET['selected'])){
                                        if($_GET['selected'] == $item['id']){
                                            echo'
                                    <p class="select-menu-item-p" style="color: black">
                                    ';
                                        }else{
                                            echo'
                                            <p class="select-menu-item-p">
                                            ';
                                        }
                                    } else{
                                        echo'
                                        <p class="select-menu-item-p">
                                        ';
                                    }
                                    echo $item['name'];
                                    echo '</p>
                                    </a>';
                                }
                                echo '
                                </div>
                                <button class="submit-button" type="submit" name="submit">İlerle</button>
                                ';
                                }
                            }
                            elseif($_GET['section'] == '4' && !empty($_SESSION['faculty_id'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                <input type="hidden" name="section" value="4">
                                <input type="hidden" name="selection" value="';                       echo $_GET['selected'];
                                echo'">
                                <p class="form-info-text">Bağlı olduğunuz fakülteyi seçiniz</p>
                                <div class="form-select-menu">';
                                foreach(getDepartments($_SESSION['faculty_id']) as $item){
                                    echo '<a href="?page=register&section=4&selected=';
                                   echo $item['id'];
                                    echo'" class="form-select-a">';
                                    if(isset($_GET['selected'])){
                                        if($_GET['selected'] == $item['id']){
                                            echo'
                                    <p class="select-menu-item-p" style="color: black">
                                    ';
                                        }else{
                                            echo'
                                            <p class="select-menu-item-p">
                                            ';
                                        }
                                    } else{
                                        echo'
                                        <p class="select-menu-item-p">
                                        ';
                                    }
                                    echo $item['name'];
                                    echo '</p>
                                    </a>';
                                }
                                echo '
                                </div>
                                <button class="submit-button" type="submit" name="submit">Formu Yolla</button>
                                ';
                                    } else{
                                        echo'
                                            <div class="login-input-div">
                                            <input class="input-left" type="text" name="email" placeholder="ePosta">
                                            <input class="input-right" type="password" name="password" placeholder="Parola">
                                            </div>
                                            <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                                        ';
                                    }
                                } else{
                                    echo '
                                <input type="hidden" name="section" value="4">
                                <input type="hidden" name="selection" value="';                       echo $_GET['selected'];
                                echo'">
                                <p class="form-info-text">Bağlı olduğunuz fakülteyi seçiniz</p>
                                <div class="form-select-menu">';
                                foreach(getDepartments($_SESSION['faculty_id']) as $item){
                                    echo '<a href="?page=register&section=4&selected=';
                                   echo $item['id'];
                                    echo'" class="form-select-a">';
                                    if(isset($_GET['selected'])){
                                        if($_GET['selected'] == $item['id']){
                                            echo'
                                    <p class="select-menu-item-p" style="color: black">
                                    ';
                                        }else{
                                            echo'
                                            <p class="select-menu-item-p">
                                            ';
                                        }
                                    } else{
                                        echo'
                                        <p class="select-menu-item-p">
                                        ';
                                    }
                                    echo $item['name'];
                                    echo '</p>
                                    </a>';
                                }
                                echo '
                                </div>
                                <button class="submit-button" type="submit" name="submit">Formu Yolla</button>
                                ';
                                }



                                
                            } else{
                                echo'
                                <div class="login-input-div">
                                    <input class="input-left" type="text" name="email" placeholder="ePosta">
                                    <input class="input-right" type="password" name="password" placeholder="Parola">
                                </div>
                                <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                                ';
                            }
                        }else{
                            echo'
                    <div class="login-input-div">
                        <input class="input-left" type="text" name="email" placeholder="ePosta">
                        <input class="input-right" type="password" name="password" placeholder="Parola">
                    </div>
                    <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                    ';
                        }
                    }else{
                        echo'
                        <div class="login-input-div">
                            <input class="input-left" type="text" name="email" placeholder="ePosta">
                            <input class="input-right" type="password" name="password" placeholder="Parola">
                        </div>
                        <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
                        ';
                    }
                   
                } else{
                    echo'
                    <div class="login-input-div">
                        <input class="input-left" type="text" name="email" placeholder="ePosta">
                        <input class="input-right" type="password" name="password" placeholder="Parola">
                    </div>
                    <div class="error-form">';
                                            if(isset($_GET['error'])){
                                                if($_GET['error'] == 'emptyinput'){
                                                   echo '<p class="error-p">Tüm alanları doldurunuz!</p>';
                                                } 
                                                elseif($_GET['error'] == 'invalidEmail'){
                                                    echo '<p class="error-p">Geçerli ePosta giriniz!</p>';
                                                }
                                                elseif($_GET['error'] == 'wronglogin'){
                                                    echo '<p class="error-p">Kayıtlı kullanıcı bulunamadı!</p>';
                                                }
                                                elseif($_GET['error'] == 'wrongPwd'){
                                                    echo '<p class="error-p">Hatalı parola!</p>';
                                                }
                                            }
                                            echo'
                                           <button class="submit-button" type="submit" name="submit">Giriş</button>
                                            </div>
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
                        if($_GET['section'] == '1' || $_GET['section'] == '2' || $_GET['section'] == '3' || $_GET['section'] == '4'){
                            if ($_GET['section'] == '1'){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <div class="color5"></div>
                                        <div class="color6"></div>
                                    ';
                                    } else{
                                        echo '
                                        <div class="color1"></div>
                                        <div class="color2"></div>
                                    ';
                                    }
                                } else{
                                    echo '
                                    <div class="color3"></div>
                                    <div class="color4"></div>
                                ';
                                }
                                
                            }elseif($_GET['section'] == '2' && isset($_SESSION['name']) && isset($_SESSION['surname']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['plate'])){
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <div class="color5"></div>
                                        <div class="color6"></div>
                                    ';
                                    } else{
                                        echo '
                                        <div class="color1"></div>
                                        <div class="color2"></div>
                                    ';
                                    }
                                } else{
                                    echo '
                                <div class="color9"></div>
                                <div class="color10"></div>
                            ';
                                }
                                
                            }
                            elseif ($_GET['section'] == '3' && isset($_SESSION['possition_id'])) {
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <div class="color5"></div>
                                        <div class="color6"></div>
                                    ';
                                    } else{
                                        echo '
                                        <div class="color1"></div>
                                        <div class="color2"></div>
                                    ';
                                    }
                                } else{
                                    echo '
                                <div class="color9"></div>
                                <div class="color10"></div>
                            ';
                                }
                            }
                            elseif ($_GET['section'] == '4' && isset($_SESSION['faculty_id'])) {
                                if (isset($_GET['error'])) {
                                    if($_GET['error'] == 'invalidPlate'|| $_GET['error'] == 'emptyForm'|| $_GET['error'] == 'invalidName'|| $_GET['error'] == 'invalidSurName' || $_GET['error'] == 'invalidEmail' || $_GET['error'] == 'epostataken'){
                                        echo '
                                        <div class="color5"></div>
                                        <div class="color6"></div>
                                    ';
                                    } else{
                                        echo '
                                        <div class="color1"></div>
                                        <div class="color2"></div>
                                    ';
                                    }
                                } else{
                                    echo '
                                <div class="color9"></div>
                                <div class="color10"></div>
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
                    }
                    else{
                        echo '
                            <div class="color1"></div>
                            <div class="color2"></div>
                        ';
                    }
                   
                } else{
                    if(isset($_GET['error'])){
                        echo '
                        <div class="color7"></div>
                        <div class="color8"></div>
                            ';
                    }
                    else{
                        echo '
                            <div class="color1"></div>
                            <div class="color2"></div>
                        ';
                    }
                }
                ?>
                
            </div>
        </section>